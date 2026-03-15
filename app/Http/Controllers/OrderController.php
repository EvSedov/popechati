<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderSubmitted;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

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
        Log::info('Form submission received.');
        if (config('app.debug')) {
            Log::info('Received data (debug):', $request->except(['description']));
        }

        // Валидация входящих данных (Изменено: Добавлена валидация)
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'selectedService' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'nullable|numeric',
            'discount' => 'nullable|numeric'
        ]);

        try {
            // Отправка письма (с постановкой в очередь)
            $recipient = config('mail.orders_recipient', env('ORDERS_RECIPIENT'));
            Mail::to($recipient)->queue(new OrderSubmitted(
                $validated['fullName'],
                $validated['selectedService'],
                $validated['phoneNumber'],
                $validated['description'] ?? '',
                $validated['quantity'],
                $validated['discount']
            ));
            Log::info('Email sent successfully.');

            // Перенаправление обратно с сообщением об успехе (Изменено: Возврат редиректа)
            return redirect()->back()->with('success', 'Заказ успешно отправлен');
        } catch (\Exception $e) {
            Log::error('Mail sending failed: ' . $e->getMessage(), ['exception' => $e]);
            return response()->json(['message' => 'Failed to submit order.', 'error' => $e->getMessage()], 500);
        }
    }
}
