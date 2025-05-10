<script setup lang="ts">
import Logo from "@/Components/Logo.vue";
</script>

<template>
    <div class="footer">
        <div class="container flex gap-18">
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
                        <div class="icons-social flex gap-1">
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
                        <span class="absolute w-60 text-xs"
                            >Copyright © 2014 – 2024 Popechati.com</span
                        >
                    </li>
                </ul>
            </div>
            <div class="flex max-w-73 min-w-66.5 flex-col">
                <ul class="m-0 flex flex-col p-0">
                    <li class="mb-4.5">
                        <p class="text-lg/5.5 font-medium">Контакты</p>
                    </li>
                    <li class="mb-3.25">
                        <p class="text-base/6.5 font-semibold">
                            +7 (495) 181-11-11
                        </p>
                        <p class="text-base/6.5 font-semibold">
                            +7 (800) 555-35-35
                        </p>
                    </li>
                    <li class="mb-6">
                        <a
                            class="text-main-blue text-base/6.5 font-semibold"
                            href="mail:popechati@gmail.com"
                        >
                            popechati@gmail.com
                        </a>
                    </li>
                    <li
                        class="text-content-primery relative text-sm/[22.4px] font-normal"
                    >
                        <span class="absolute w-73">
                            115280, г. Москва, ул. Ленинская<br />
                            Слобода, д. 19, БЦ "Омега Плаза", 4 этаж,<br />
                            офис 4005/1. В 300 метрах от станции<br />
                            метро Автозаводская.
                        </span>
                    </li>
                </ul>
            </div>
            <div class="flex min-w-56 flex-col">
                <ul class="m-0 flex flex-col p-0">
                    <li class="mb-4.5">
                        <p class="text-lg/5.5 font-medium">Информация</p>
                    </li>
                    <li class="">
                        <ul
                            class="text-content-primery text-sm/6.5 font-normal underline"
                        >
                            <li><span>Контакты</span></li>
                            <li><span>Требования к макетам</span></li>
                            <li><span>Оплата, доставка, возврат</span></li>
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
                        <p class="text-lg/5.5 font-medium">Популярные услуги</p>
                    </li>
                    <li class="">
                        <ul
                            class="text-content-primery text-sm/6.5 font-normal underline"
                        >
                            <li><span>Печать визиток, листовок</span></li>
                            <li><span>Печать на баннере</span></li>
                            <li><span>Календари</span></li>
                            <li><span>Печать плакатов, наклеек</span></li>
                            <li><span>Roll Up, Press Wall</span></li>
                            <li><span>ПублПечать на кружках, ручках</span></li>
                            <li><span>Холсты, фотоколлажи, пазлы</span></li>
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
    margin: 32px auto 56px;
    padding: 0 30px;
}
</style>
