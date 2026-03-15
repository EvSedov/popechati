<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\OrderController;

Route::get('/', function(){
    return Inertia::render('Home');
});

// Новый маршрут для отправки формы заказа (с троттлингом)
Route::post('/submit-order', [OrderController::class, 'submitOrder'])->middleware('throttle:orders');
