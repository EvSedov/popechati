<x-mail::message>
# Новый заказ с сайта popechati.com

Вы получили новый заказ из формы обратной связи.

**Детали заказа:**

-   **ФИО:** {{ $fullName }}
-   **Услуга:** {{ $selectedService }}
-   **Телефон:** {{ $phoneNumber }}
-   **Описание:**
    {{ $description }}

Спасибо,<br>
{{ config('app.name') }}
</x-mail::message>
