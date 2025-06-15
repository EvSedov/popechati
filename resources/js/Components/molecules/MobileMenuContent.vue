<script setup lang="ts">
import { inject } from "vue"; // {{ 1 }}
import { Button } from "@/Components/atoms/ui/button"; // {{ 2 }}
import BasketShopping from "@/Components/atoms/icons/BasketShopping.vue"; // {{ 3 }}
const openOrderModal = inject("openOrderModal") as () => void; // {{ 4 }}
</script>

<template>
    <nav class="flex flex-col gap-2 p-4">
        <a
            href="#"
            class="block rounded-md px-4 py-2 text-lg font-medium text-gray-700 hover:bg-gray-100"
        >
            Главная
        </a>
        <a
            href="#"
            class="block rounded-md px-4 py-2 text-lg font-medium text-gray-700 hover:bg-gray-100"
        >
            Как мы работаем?
        </a>
        <a
            href="#"
            class="block rounded-md px-4 py-2 text-lg font-medium text-gray-700 hover:bg-gray-100"
        >
            Наши работы и портфолио
        </a>
        <a
            href="#contacts"
            class="block rounded-md px-4 py-2 text-lg font-medium text-gray-700 hover:bg-gray-100"
        >
            Контакты
        </a>
        <a
            href="/docs/introduction"
            class="block rounded-md px-4 py-2 text-lg font-medium text-gray-700 hover:bg-gray-100"
        >
            Часто задаваемые вопросы
        </a>
    </nav>

    <div
        class="mt-4 flex flex-col items-center border-t border-gray-200 p-4 md:items-start"
    >
        <!-- {{ 5 }} -->
        <div
            class="flex flex-col items-center space-y-2 px-4 text-sm md:items-start"
        >
            <div class="flex items-center gap-1">
                <a
                    href="tel:+79254709400"
                    class="font-semibold whitespace-nowrap text-gray-900"
                    >+7 (925) 470-94-00</a
                >
                <img
                    src="/public/icons/i-social-whatsapp.png"
                    alt="Иконка социальной сети WhatsApp"
                    class="ml-1 h-4 w-4"
                />
                <img
                    src="/public/icons/i-social-tg.png"
                    alt="Иконка социальной сети телеграмм"
                    class="ml-1 h-4 w-4"
                />
            </div>
            <div class="flex items-center">
                <a
                    href="tel:+74993985601"
                    class="font-semibold whitespace-nowrap text-gray-900"
                    >+7 (499) 398-56-01</a
                >
            </div>
            <a href="mailto:POPECHATI@GMAIL.COM" class="text-xs text-gray-600"
                >popechati@gmail.com</a
            >
        </div>

        <Button
            class="mt-4 box-border w-fit rounded-md border-2 border-[#BA2150] bg-gradient-to-r from-[#F10488] to-[#FF0224] px-6 py-3 text-base font-semibold tracking-wider text-white shadow-lg transition-all duration-300 hover:from-[#E2047A] hover:to-[#E0021F] md:ml-4"
            @click="openOrderModal"
        >
            <BasketShopping class="mr-2 h-4 w-4" />
            Создать заказ
        </Button>
    </div>
</template>
