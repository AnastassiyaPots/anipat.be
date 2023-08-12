<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\Register;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {
        $registers = Register::all();
        return view('admin.registers.index', compact('registers'));
    }
    public function create()
    {
        $users = User::all();
        $masters = Master::all();
        $services = Service::with('masters')->get();
        return view('admin.registers.create', compact('users', 'masters', 'services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'service' => 'required|exists:services,id',
            'master' => 'required|exists:masters,id',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        Register::create([
            'user_id'    => $request->input('user'),
            'service_id' => $request->input('service'),
            'master_id'  => $request->input('master'),
            'date'       => $request->input('date'),
            'time'       => $request->input('time'),
        ]);

        return redirect()->route('admin.registers.index')->with('success', 'Запись успешно создана.');
    }

    public function edit($id)
    {
        $register = Register::findOrFail($id);
        $users = User::all();
        $masters = Master::all();
        $services = Service::with('masters')->get();
        return view('admin.registers.edit', compact('register', 'users', 'masters', 'services'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user' => 'required',
            'service' => 'required|exists:services,id',
            'master' => 'required|exists:masters,id',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        $register = Register::findOrFail($id);
        $register->update([
            'user_id' => $request->input('user_id'),
            'master_id' => $request->input('master_id'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
        ]);

        return redirect()->route('admin.registers.index')->with('success', 'Запись успешно обновлена.');
    }

    public function destroy($id)
    {
        $register = Register::findOrFail($id);
        $register->delete();

        return redirect()->route('admin.registers.index')->with('success', 'Запись успешно удалена.');
    }
}