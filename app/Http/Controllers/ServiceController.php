<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show() {

        $services = Service::with('masters')->get();

        return view('service', [
            'services' => $services,

        ]);
    }
}
