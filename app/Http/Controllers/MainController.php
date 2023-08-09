<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {

        $services = Service::all();
        $masters = Master::all();

        return view('main', [
            'services' => $services,
            'masters' => $masters,
        ]);
    }

}
