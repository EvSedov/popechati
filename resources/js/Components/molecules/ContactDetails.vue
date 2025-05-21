<script setup lang="ts">
// Компонент с контактной информацией
</script>

<template>
    <div class="contact-details max-w-[335px]">
        <!-- Адреса -->
        <div class="mb-4 flex gap-3">
            <h2 class="font-medium tracking-wide text-neutral-900">Адреса</h2>
            <a
                href="#"
                class="block h-[34px] rounded-lg border border-dashed border-[#1882F0] px-5 py-1.5 text-center text-[13px] leading-[22px] font-medium whitespace-nowrap text-[#1882F0]"
            >
                Центральный офис
            </a>
        </div>

        <!-- Контакты и номера телефонов -->
        <div class="mb-2">
            <h3 class="font-medium text-neutral-900">
                Контакты и номера телефонов:
            </h3>
            <div>
                <div>
                    <span class="whitespace-nowrap text-neutral-900"
                        >+7 (925) 470-94-00</span
                    >
                    &nbsp;
                    <span class="text-neutral-900/50"
                        >(Копи-центр, выдача заказов)</span
                    >
                </div>
                <div>
                    <span class="whitespace-nowrap text-neutral-900"
                        >+7 (499) 398-56-01</span
                    >
                    &nbsp;
                    <span class="text-neutral-900/50">(Городской номер)</span>
                </div>
                <div>
                    <span class="whitespace-nowrap text-neutral-900"
                        >+7 (977) 813-32-27</span
                    >
                    &nbsp;
                    <span class="text-neutral-900/50"
                        >(Прием заказов, консультация, сопровождение
                        клиентов)</span
                    >
                </div>
                <div>
                    <a
                        href="mailto:popechati@gmail.com"
                        class="text-xs text-blue-600"
                        >popechati@gmail.com</a
                    >
                </div>
            </div>
        </div>

        <!-- Дополнительная информация -->
        <div class="mb-4">
            <h3 class="mb-2 font-medium text-neutral-900">Дополнительно:</h3>
            <p class="text-neutral-700">
                В офисе есть каталог и материалов, образцы продукции, мягкие
                диванчики.
            </p>
        </div>

        <!-- Время работы -->
        <div class="mb-4">
            <h3 class="mb-2 font-medium text-neutral-900">Время работы:</h3>
            <p class="text-neutral-700">Пн - Пт 11:00 - 22:00</p>
            <p class="text-neutral-700">Сб, Вс: По договоренности!</p>
        </div>

        <!-- Адрес -->
        <div class="mb-6">
            <h3 class="mb-2 font-medium text-neutral-900">Адрес:</h3>
            <p class="text-neutral-700">
                Батайский проезд 59, вход между первым и вторым подъездом, офис
                24
                <span class="font-bold text-neutral-500"
                    >(Копи-центр, выдача заказов)</span
                >
            </p>
        </div>

        <!-- Проложить маршрут -->
        <div>
            <h3 class="mb-2 font-medium text-neutral-900">
                Проложить маршрут:
            </h3>
            <div class="flex space-x-4">
                <a href="#" class="h-6 w-6 text-yellow-500">
                    <span class="sr-only">Яндекс</span>
                    <img
                        src="/public/icons/icon-nav-yandex.svg"
                        alt="Яндекс карты"
                    />
                </a>
                <a href="#" class="h-6 w-6 text-red-500">
                    <span class="sr-only">Google</span>
                    <img
                        src="/public/icons/icons-nav-google.svg"
                        alt="Google map"
                    />
                </a>
                <a href="#" class="h-6 text-blue-500">
                    <span class="sr-only">2GIS</span>
                    <img
                        src="/public/icons/icon-nav-2gis.svg"
                        alt="Навигатор 2Gis"
                        width="76"
                        height="24"
                    />
                </a>
            </div>
        </div>
    </div>
</template>

<style scoped>
p,
span,
a {
    font-size: 12px;
    line-height: 20px;
    letter-spacing: 0.5px;
}

h2 {
    font-size: 20px;
}

h3 {
    font-weight: 500;
    font-size: 14px;
    line-height: 20px;
}

.text-blue-600 {
    color: #1882f0;
}
</style>
