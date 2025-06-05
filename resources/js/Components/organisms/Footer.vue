<script setup lang="ts">
import Logo from "@/Components/atoms/Logo.vue";
</script>

<template>
    <div class="footer border-t border-[#F3F3F3]">
        <div class="container flex gap-[88px]">
            <div class="flex min-w-56 flex-col">
                <ul class="m-0 flex flex-col p-0">
                    <li>
                        <Logo />
                    </li>
                    <li class="my-6 w-33.5">
                        <div class="grid grid-cols-2 grid-rows-2 gap-1.5">
                            <div
                                class="flex h-8 w-16 items-center justify-center rounded-sm border-1 border-[#EAEAEA]"
                            >
                                <img
                                    src="/public/icons/cards-visa.png"
                                    alt="Оплата картой visa"
                                />
                            </div>
                            <div
                                class="flex h-8 w-16 items-center justify-center rounded-sm border-1 border-[#EAEAEA]"
                            >
                                <img
                                    src="/public/icons/cards-master.png"
                                    alt="Оплата master card"
                                />
                            </div>
                            <div
                                class="flex h-8 w-16 items-center justify-center rounded-sm border-1 border-[#EAEAEA]"
                            >
                                <img
                                    src="/public/icons/cards-webmoney.png"
                                    alt="Оплата через WebMoney"
                                />
                            </div>
                            <div
                                class="flex h-8 w-16 items-center justify-center rounded-sm border-1 border-[#EAEAEA]"
                            >
                                <img
                                    src="/public/icons/cards-mir.png"
                                    alt="Оплата картой Мир"
                                />
                            </div>
                        </div>
                    </li>
                    <li class="mb-5">
                        <div class="icons-social flex gap-[5px]">
                            <img
                                src="/public/icons/i-social-vk.png"
                                alt="Иконка социальной сети вконтакте"
                                class="m-2"
                            />
                            <img
                                src="/public/icons/i-social-tg.png"
                                alt="Иконка социальной сети телеграмм"
                                class="m-2"
                            />
                            <img
                                src="/public/icons/i-social-whatsapp.png"
                                alt="Иконка социальной сети WhatsApp"
                                class="m-2"
                            />
                        </div>
                    </li>
                    <li class="relative">
                        <span
                            class="absolute w-60 text-xs leading-relaxed text-[#2C2C2C]"
                            >Copyright © 2014 – 2025 Popechati.com</span
                        >
                    </li>
                </ul>
            </div>
            <div class="flex max-w-73 min-w-66.5 flex-col">
                <ul class="m-0 flex flex-col p-0">
                    <li class="mb-4.5">
                        <p class="text-lg/5.5 font-medium text-[#2C2C2C]">
                            Контакты
                        </p>
                    </li>
                    <li class="mb-[13px]">
                        <a href="tel:+74993985601">
                            <p
                                class="text-base/6.5 font-semibold text-[#2C2C2C]"
                            >
                                +7 (499) 398-56-01
                            </p>
                        </a>
                        <div class="flex items-center gap-2">
                            <a href="tel:+79254709400" class="flex">
                                <p
                                    class="text-base/6.5 font-semibold text-[#2C2C2C]"
                                >
                                    +7 (925) 470-94-00
                                </p>
                            </a>
                            <span class="flex gap-1.5">
                                <img
                                    src="/public/icons/i-social-whatsapp.png"
                                    alt="Иконка социальной сети WhatsApp"
                                    class="h-4 w-4"
                                />
                                <img
                                    src="/public/icons/i-social-tg.png"
                                    alt="Иконка социальной сети телеграмм"
                                    class="h-4 w-4"
                                />
                            </span>
                        </div>
                    </li>
                    <li class="mb-4">
                        <a
                            class="text-base/6.5 font-semibold text-[#1882F0]"
                            href="mail:popechati@gmail.com"
                        >
                            popechati@gmail.com
                        </a>
                    </li>
                    <li
                        class="text-sm leading-relaxed font-normal text-[#2C2C2C]"
                    >
                        <span class="w-73 leading-relaxed">
                            г. Москва, Батайский проезд 59, <br />метро
                            Автозаводская, вход с противоположной стороны от
                            подъездов, под вывеской «КОПИ ЦЕНТ», 7 минут пешком
                            от метро Марьино
                        </span>
                    </li>
                </ul>
            </div>
            <div class="flex min-w-56 flex-col">
                <ul class="m-0 flex flex-col p-0">
                    <li class="mb-4.5">
                        <p class="text-lg/5.5 font-medium text-[#2C2C2C]">
                            Информация
                        </p>
                    </li>
                    <li class="">
                        <ul
                            class="text-sm leading-[25px] font-normal text-[#2C2C2C] underline"
                        >
                            <li><span>Контакты</span></li>
                            <li><span>Требования к макетам</span></li>
                            <li class="flex flex-wrap">
                                <span>Оплата</span>,
                                <span class="ml-1">доставка</span>,
                                <span class="ml-1">возврат</span>
                            </li>
                            <li><span>Реальные отзывы</span></li>
                            <li><span>Пользовательское соглашение</span></li>
                            <li><span>Публичная оферта</span></li>
                            <li><span>Каталог материалов</span></li>
                            <li><span>Переделка и возврат</span></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="flex min-w-56 flex-col">
                <ul class="m-0 flex flex-col p-0">
                    <li class="mb-4.5">
                        <p class="text-lg/5.5 font-medium text-[#2C2C2C]">
                            Популярные услуги
                        </p>
                    </li>
                    <li class="">
                        <ul
                            class="text-sm leading-[25px] font-normal text-[#2C2C2C] underline"
                        >
                            <li class="flex flex-wrap">
                                <span>Печать визиток</span>,
                                <span class="ml-1">листовок</span>
                            </li>
                            <li><span>Печать на баннере</span></li>
                            <li><span>Календари</span></li>
                            <li class="flex flex-wrap">
                                <span>Печать плакатов</span>,
                                <span class="ml-1">наклеек</span>
                            </li>
                            <li class="flex flex-wrap">
                                <span>Roll Up</span>,
                                <span class="ml-1">Press Wall</span>
                            </li>
                            <li class="flex flex-wrap">
                                <span>Печать на кружках</span>,
                                <span class="ml-1">ручках</span>
                            </li>
                            <li class="flex flex-wrap">
                                <span>Холсты</span>,
                                <span class="ml-1">фотоколлажи</span>,
                                <span class="ml-1">пазлы</span>
                            </li>
                            <li><span>Все услуги</span></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style lang="css" scoped>
.footer {
    width: 100%;
}
.container {
    max-width: 1220px;
    margin: 31px auto 30px;
    padding: 0 30px;
}
</style>
