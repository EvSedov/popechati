<script lang="ts" setup>
import { Button } from "@/Components/atoms/ui/button";
import ArrowRight from "@/Components/atoms/icons/ArrowRight.vue";
import { inject } from "vue";

// Инжектируем функцию открытия модального окна заказа.
// Если в вашем приложении нет такого инжектирования, этот код можно удалить.
const openOrderModal = inject("openOrderModal") as () => void;

// Вспомогательная функция для генерации динамических путей к изображениям
const getImageUrl = (name: string) => {
    // Этот подход гарантирует, что Vite (или другой сборщик) правильно обработает путь
    // к изображению, если оно находится в папке 'resources/images/products/'
    return new URL(`/public/images/products/${name}`, import.meta.url).href;
};

// Данные для карточек категорий продуктов
const productCategories = [
    {
        id: 1,
        title: "ФУТБОЛКИ",
        image: getImageUrl("hero-t-shirt.png"), // Динамический путь к изображению
        link: "/category/tshirts",
        bgColor: "#E0F2F7", // Светло-голубой фон
        titleColor: "#A3AFBC", // Цвет для вертикального заголовка
    },
    {
        id: 2,
        title: "КРУЖКИ",
        image: getImageUrl("plate.png"), // Динамический путь к изображению
        link: "/category/mugs",
        bgColor: "#E3F3F3", // Обновлен фон согласно CSS для кружки
        titleColor: "#BCCACA", // Обновлен цвет заголовка согласно CSS для кружки
    },
    {
        id: 3,
        title: "ТАРЕЛКИ",
        image: getImageUrl("plate.png"), // Путь к изображению тарелки
        link: "/category/plates",
        bgColor: "#FBF6E3", // Обновлен фон согласно CSS для тарелки
        titleColor: "#DFDAC7", // Цвет заголовка согласно CSS для тарелки
    },
    {
        id: 4,
        title: "ШОПЕРЫ",
        image: getImageUrl("shopper.png"), // Обновлен путь к изображению шопера
        link: "/category/shoppers",
        bgColor: "#FBE1EA", // Обновлен фон согласно CSS для шопера
        titleColor: "#E2B4C4", // Обновлен цвет заголовка согласно CSS для шопера
    },
];

// Вспомогательная функция для определения классов Tailwind для каждой карточки продукта,
// включая масштабирование и вертикальный сдвиг.
const getProductCardImgClasses = (index: number) => {
    let style = "";
    if (index === 0) {
        style =
            "width: 267px; aspect-ratio: auto 1/1; left: 68px; top: 86px; transform: scale(1.25);";
    } else if (index === 1) {
        style =
            "height: 227px; aspect-ratio: auto 1/1; top: 124px; left: 56px; transform: scale(1.4); ";
    } else if (index === 2) {
        style =
            "height: 227px; aspect-ratio: auto 1/1; top: 124px; left: 56px; transform: scale(1.4); ";
    } else if (index === 3) {
        style =
            "height: 227px; aspect-ratio: auto 1/1; left: 28px; transform: scale(2.2); top: 62px;";
    }

    return style;
};
</script>

<template>
    <section
        class="relative w-full overflow-hidden bg-[#F7F7F7] py-20 pb-[350px]"
    >
        <!-- Основной контейнер контента -->
        <div
            class="container mx-auto flex max-w-[1590px] items-center justify-between gap-20 px-4"
        >
            <!-- Левый блок: Текстовый контент -->
            <div
                class="mb-12 flex w-full flex-col items-start text-center lg:mb-0 lg:w-[40%] lg:text-left"
            >
                <h1
                    class="mb-6 text-[4px] leading-[54px] font-bold text-black md:text-[54px] md:leading-[66px] lg:text-[64px] lg:leading-[78px]"
                    style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)"
                >
                    ПЕЧАТАЙТЕ <br />
                    <span class="text-[#ED008C]">ВСЁ ЧТО</span> <br />
                    ХОТИТЕ
                </h1>
                <p
                    class="mb-10 max-w-md text-[18px] leading-[22px] font-medium text-black/65"
                >
                    От дизайна футболок до канцелярских товаров. Мы печатаем
                    все, делаем все то, чего не делают другие
                </p>
                <Button
                    class="h-15 rounded-full bg-gradient-to-r from-[#F10488] to-[#FF0224] px-9 py-0 text-lg font-semibold text-white uppercase shadow-lg transition-all duration-300 hover:from-[#E2047A] hover:to-[#E0021F]"
                    @click="openOrderModal"
                >
                    СДЕЛАТЬ ЗАКАЗ
                    <ArrowRight class="ml-4 h-4 w-4" />
                </Button>
            </div>

            <!-- Правый блок: Карточки категорий продуктов -->
            <div
                class="relative flex w-full items-center justify-center gap-20"
            >
                <div
                    v-for="(product, index) in productCategories"
                    :key="product.id"
                    :style="{ backgroundColor: product.bgColor }"
                    class="relative flex h-[515px] w-[227px] flex-col rounded-xl pt-2 pb-16.5 hover:z-10 hover:scale-118"
                >
                    <!-- Вертикальный заголовок категории -->
                    <h3
                        class="self-start text-[55px]/[60px] font-semibold tracking-wider whitespace-nowrap"
                        :style="{
                            color: product.titleColor,
                        }"
                    >
                        {{ product.title }}
                    </h3>

                    <Button
                        class="mx-auto mt-auto mr-5 ml-5 flex h-[45px] w-[192px] border-dashed border-[#0034B0] bg-transparent p-6 text-[12px] font-semibold text-black"
                        variant="outline"
                    >
                        Узнать подробнее
                        <ArrowRight class="ml-2 h-3.75 w-4.25 invert" />
                    </Button>
                    <img
                        :src="product.image"
                        :alt="product.title"
                        class="absolute z-5"
                        :style="getProductCardImgClasses(index)"
                    />
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
h3 {
    writing-mode: vertical-lr;
    transform: rotate(180deg);
}

.bg-hero-pattern {
    background-image: url("/images/bg-hero-abstract.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>
