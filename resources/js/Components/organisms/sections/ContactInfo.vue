<script setup lang="ts">
import YandexMap from "@/Components/molecules/YandexMap.vue";
import FaqAccordion from "@/Components/molecules/FaqAccordion.vue";
import ContactDetails from "@/Components/molecules/ContactDetails.vue";

// Данные для FAQ
const faqItems = [
    {
        question: "Как сделать заказ?",
        answer: "Подробная информация о процессе оформления заказа в нашей компании.",
    },
    {
        question: "У вас есть санитарные зоны?",
        answer: "Информация о расположении санитарных зон в нашем офисе.",
    },
    {
        question: "Как покупать в рассрочку?",
        answer: "Подробная информация о возможностях покупки товаров в рассрочку.",
    },
    {
        question: "Как еще можно получить у вас футболку?",
        answer: "Информация о специальных предложениях и акциях компании.",
    },
    {
        question: "Как начисляется кэшбэк?",
        answer: "Детальная информация о программе лояльности и начислении кэшбэка.",
    },
];
</script>

<template>
    <div id="contacts" class="w-full bg-white pt-[26px] pb-[80px]">
        <div class="mx-auto w-[1170px]">
            <!-- Заголовок секции -->
            <h2
                class="font-montserrat mb-10 text-center text-[42px] font-semibold text-[#2C2C2C]"
            >
                Контактная информация
            </h2>

            <!-- Контактная информация с картой -->
            <div class="mb-16 flex flex-row gap-23.5">
                <!-- Левая колонка: Карта и FAQ -->
                <div class="flex flex-col pl-2">
                    <!-- Яндекс карта -->
                    <YandexMap />

                    <!-- FAQ секция (перемещена под карту) -->
                    <FaqAccordion :items="faqItems" />
                </div>

                <!-- Контактная информация (правая часть) -->
                <div class="w-[40%]">
                    <ContactDetails />
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.text-blue-600 {
    color: #1882f0;
}

/* Стили для секции FAQ */
button:focus {
    outline: none;
}

.prose p {
    margin-bottom: 0.5rem;
}
</style>
