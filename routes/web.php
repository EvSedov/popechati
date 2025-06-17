<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function(){
    return Inertia::render('Home');
});

// Новый маршрут для отправки формы заказа (Изменено: Добавлен новый маршрут)
Route::post('/submit-order', [App\Http\Controllers\OrderController::class, 'submitOrder']);
