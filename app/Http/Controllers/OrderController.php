<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Service;
use App\Models\Register;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $masters = Master::all();
        $services = Service::with('masters')->get();
        return view('orders.create', compact('services', 'masters'));
    }

    public function store(Request $request)
    {
        // Валидация данных заказа
        $rules = [
            'service' => 'required|exists:services,id',
            'master' => 'required|exists:masters,id',
            'date' => 'required|date',
            'time' => 'required',
        ];

        // Сообщения об ошибках для вывода пользователю
        $messages = [
            'service.required' => 'Пожалуйста, выберите услугу.',
            'master.required' => 'Пожалуйста, выберите мастера.',
            'date.required' => 'Пожалуйста, выберите дату.',
            'time.required' => 'Пожалуйста, выберите время.',
        ];

        // валидация данных заказа
        $request->validate($rules, $messages);

        // Сохраняю данные в базу данных
        $register = new Register([
            'user_id' => auth()->user()->id,
            'master_id' => $request->input('master'),
            'service_id' => $request->input('service'),
            'date' => $request->input('date'),
            'hour' => $request->input('time'),
        ]);

        // сохранение
        $register->save();

        // сообщение о том, что заявка принята
        $request->session()->flash('success', 'Спасибо, ваша заявка принята!');
        // перенаправление на главную страницу
        return redirect()->route('home', $register->id);
    }

    public function getMastersByService($serviceId)
    {
        // Получаю мастеров, предоставляющих выбранную услугу
        $service = Service::find($serviceId);
        if (!$service) {
            return response()->json(['masters' => []]);
        }

        // Мастера, предоставляющие услугу, доступны через отношение "services" модели Master
        $masters = $service->masters;

        // Форматирую данные для ответа AJAX в формат JSON
        $formattedMasters = $masters->map(function ($master) {
            return [
                'id' => $master->id,
                'name' => $master->name,
                'price' => $master->pivot->price,
            ];
        });

        // Возвращаю данные в формате JSON
        return response()->json(['masters' => $formattedMasters]);
    }
}