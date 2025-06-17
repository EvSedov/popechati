<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderSubmitted;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Handle the form submission for a new order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitOrder(Request $request)
    {
        // Валидация входящих данных (Изменено: Добавлена валидация)
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'selectedService' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:255',
            'description' => 'nullable|string', // Описание может быть необязательным
        ]);

        // Отправка письма (Изменено: Добавлена логика отправки письма)
        Mail::to('sedoff-online@yandex.ru')->send(new OrderSubmitted( // Изменено: Замени 'your-email@example.com' на реальный email
            $validated['fullName'],
            $validated['selectedService'],
            $validated['phoneNumber'],
            $validated['description']
        ));

        // Перенаправление обратно с сообщением об успехе (Изменено: Возврат редиректа)
        return back()->with('success', 'Ваш заказ успешно отправлен!');
    }
}
