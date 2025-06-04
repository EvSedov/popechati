<script setup lang="ts">
import { Button } from "@/Components/atoms/ui/button";
</script>

<template>
    <div class="bg-linear-to-r from-[#EA5A55] to-[#254EA3] py-[11px]">
        <div class="discount mx-auto flex-col xl:flex-row">
            <p
                class="mb-2 text-center font-[Commissioner] text-xs/5.5 font-bold tracking-normal text-white xl:mb-0"
            >
                Скидка 10% на онлайн заказ через корзину и бесплатная курьерская
                доставка по Москве в пределах МКАД при заказе от 6 000 000 ₽!
            </p>
            <Button
                class="m-0 ml-[11.6px] h-[25px] bg-white px-[10px] py-0 text-[10px] text-[#2C2C2C] hover:bg-gray-300"
                >Подробнее</Button
            >
        </div>
    </div>
</template>

<style lang="css" scoped>
.discount {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 0px 30px;
    gap: 11.6px;
}
</style>
