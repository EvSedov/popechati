<script setup lang="ts">
import { inject } from "vue";
import { Button } from "@/Components/atoms/ui/button";
import BasketShopping from "@/Components/atoms/icons/BasketShopping.vue";
const openOrderModal = inject("openOrderModal") as () => void;
const closeSheet = inject("closeSheet") as () => void;

const handleLinkClick = () => {
    if (closeSheet) {
        closeSheet();
    }
};
</script>

<template>
    <nav class="flex flex-col gap-2 p-4">
        <a
            href="#"
            class="block rounded-md px-4 py-2 text-lg font-medium text-gray-700 hover:bg-gray-100"
            @click="handleLinkClick"
        >
            Главная
        </a>
        <a
            href="#"
            class="block rounded-md px-4 py-2 text-lg font-medium text-gray-700 hover:bg-gray-100"
            @click="handleLinkClick"
        >
            Как мы работаем?
        </a>
        <a
            href="#"
            class="block rounded-md px-4 py-2 text-lg font-medium text-gray-700 hover:bg-gray-100"
            @click="handleLinkClick"
        >
            Наши работы и портфолио
        </a>
        <a
            href="#contacts"
            class="block rounded-md px-4 py-2 text-lg font-medium text-gray-700 hover:bg-gray-100"
            @click="handleLinkClick"
        >
            Контакты
        </a>
        <a
            href="/docs/introduction"
            class="block rounded-md px-4 py-2 text-lg font-medium text-gray-700 hover:bg-gray-100"
            @click="handleLinkClick"
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
                    class="rounded-md px-1 py-0.5 font-semibold whitespace-nowrap text-gray-900 transition-all duration-300 ease-in-out hover:scale-105 hover:text-[#BA2150]"
                    @click="handleLinkClick"
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
                    class="rounded-md px-1 py-0.5 font-semibold whitespace-nowrap text-gray-900 transition-all duration-300 ease-in-out hover:scale-105 hover:text-[#BA2150]"
                    @click="handleLinkClick"
                    >+7 (499) 398-56-01</a
                >
            </div>
            <a
                href="mailto:POPECHATI@GMAIL.COM"
                class="mt-2 rounded-md px-1 py-0.5 text-xs text-gray-600 transition-all duration-300 ease-in-out hover:scale-105 hover:text-[#1882F0]"
                @click="handleLinkClick"
                >popechati@gmail.com</a
            >
        </div>

        <Button
            class="mt-4 box-border w-fit rounded-md border-2 border-[#BA2150] bg-gradient-to-r from-[#F10488] to-[#FF0224] px-6 py-3 text-base font-semibold tracking-wider text-white shadow-lg transition-all duration-300 hover:from-[#E2047A] hover:to-[#E0021F] md:ml-4"
            @click="
                () => {
                    handleLinkClick();
                    openOrderModal();
                }
            "
        >
            <BasketShopping class="mr-2 h-4 w-4" />
            Создать заказ
        </Button>
    </div>
</template>
