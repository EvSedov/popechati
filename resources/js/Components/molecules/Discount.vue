<script setup lang="ts">
import { Button } from "@/Components/atoms/ui/button";
</script>

<template>
    <div class="bg-linear-to-r from-[#EA5A55] to-[#254EA3]">
        <div class="discount">
            <p
                class="font-[Commissioner] text-xs/5.5 tracking-normal text-white"
            >
                <span class="font-bold">Скидка 10%</span> на онлайн заказ через
                корзину и
                <span class="font-bold">бесплатная курьерская доставка</span> по
                Москве в пределах МКАД
                <span class="font-bold">при заказе от 6 000 000 ₽!</span>
            </p>
            <Button
                class="text-content-primery m-0 ml-3 h-7 bg-white px-5 py-0 text-[10px] hover:bg-gray-300"
                >Подробнее</Button
            >
        </div>
    </div>
</template>

<style lang="css" scoped>
.discount {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 998px;
    margin: 0 auto;
    padding: 12px 0;
}
</style> 