<script setup lang="ts">
// Массивы с данными для секций
const cards = [
    { name: "VISA", icon: "/icons/visa.svg", className: "w-13 h-7.5" },
    {
        name: "mastercard",
        icon: "/icons/mastercard.svg",
        className: "w-9.5 h-7.5",
    },
    { name: "maestro", icon: "/icons/maestro.svg", className: "w-9.5 h-7.5" },
    { name: "МИР", icon: "/icons/mir.svg", className: "w-16 h-5" },
    {
        name: "Apple Pay",
        icon: "/icons/applepay.svg",
        className: "w-15.5 h-10.5",
    },
];
const wallets = [
    {
        name: "WebMoney",
        icon: "/icons/webmoney.svg",
        className: "w-27.5 h-8.5",
    },
    { name: "QIWI", icon: "/icons/qiwi.svg", className: "w-23.5 h-13" },
    { name: "Юmoney", icon: "/icons/yoomoney.svg", className: "w-26 h-5.5" },
];
const terminals = [
    { name: "Comepay", icon: "/icons/comepay.svg", className: "w-30 h-12.5" },
    { name: "Связной", icon: "/icons/svyaznoy.svg", className: "w-28 h-9.5" },
    { name: "Евросеть", icon: "/icons/euroset.svg", className: "w-28 h-7.5" },
];
const bank = [{ name: "Банковский расчет", icon: "/icons/bank.svg" }];
</script>

<template>
    <section class="mx-auto my-0 flex w-full bg-[#f7f7f7] pt-18 pb-20">
        <div class="mx-auto my-0">
            <h2 class="mb-7 text-center text-[42px] font-bold">
                Способы оплаты в Типографии
            </h2>
            <div
                class="grid grid-cols-2 grid-rows-1 rounded-2xl bg-white text-sm"
            >
                <!-- 1 -->
                <div
                    class="flex flex-col items-center justify-center border-r border-b border-[#ececec] px-19 pb-13"
                >
                    <div class="mt-6.5 mb-6 font-medium">
                        Любые банковские карты
                    </div>
                    <div class="flex items-center gap-10">
                        <img
                            v-for="item in cards"
                            :key="item.name"
                            :src="item.icon"
                            :alt="item.name"
                            :class="item.className"
                        />
                    </div>
                </div>
                <!-- 2 -->
                <div
                    class="flex flex-col items-center justify-center border-r border-[#ececec] px-19 pb-13"
                >
                    <div class="mt-6.5 mb-6 font-medium">
                        Оплата наличными и банковский перевод
                    </div>
                    <div class="flex items-center gap-8">
                        <img
                            v-for="item in bank"
                            :key="item.name"
                            :src="item.icon"
                            :alt="item.name"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
* {
    font-family: "Commissioner";
}
</style>
