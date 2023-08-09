<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function show() {

        $masters = Master::all();

        return view('master', [
            'masters' => $masters,
        ]);
    }
}
