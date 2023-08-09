<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'show'])->name('about');

Route::get('/masters', [MasterController ::class, 'show'])->name('masters');

Route::get('/services', [ServiceController::class, 'show'])->name('services');

Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/get-masters-by-service/{serviceId}', [OrderController::class, 'getMastersByService']);

Route::middleware('guest')->group(function () {
    // отображение формы регистрации
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    // прием данных с формы регистрации
    Route::post('register', [RegisteredUserController::class, 'store']);

    // отображение формы логина
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    // прием данных с формы логина
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

// группа роутеров для тех пользователей, кто успешно вошел в свой аккаунт
Route::middleware('auth')->group(function () {
    // роутер для выхода из своего аккаунта
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
