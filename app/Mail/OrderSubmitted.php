<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    // Добавлены публичные свойства для хранения данных формы
    public $fullName;
    public $selectedService;
    public $phoneNumber;
    public $description;

    /**
     * Create a new message instance.
     */
    public function __construct($fullName, $selectedService, $phoneNumber, $description) // Изменено: Добавлены параметры в конструктор
    {
        $this->fullName = $fullName;
        $this->selectedService = $selectedService;
        $this->phoneNumber = $phoneNumber;
        $this->description = $description;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Новый заказ с сайта popechati.com',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.orders.submitted',
            with: [ // Изменено: Передача данных в шаблон
                'fullName' => $this->fullName,
                'selectedService' => $this->selectedService,
                'phoneNumber' => $this->phoneNumber,
                'description' => $this->description,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
