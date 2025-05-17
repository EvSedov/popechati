<script setup lang="ts">
// Массивы с данными для секций
const cards = [
  { name: 'VISA', icon: '/icons/visa.svg' },
  { name: 'mastercard', icon: '/icons/mastercard.svg' },
  { name: 'maestro', icon: '/icons/maestro.svg' },
  { name: 'МИР', icon: '/icons/mir.svg' },
  { name: 'Apple Pay', icon: '/icons/applepay.svg' },
];
const wallets = [
  { name: 'WebMoney', icon: '/icons/webmoney.svg' },
  { name: 'QIWI', icon: '/icons/qiwi.svg' },
  { name: 'Юmoney', icon: '/icons/yoomoney.svg' },
];
const terminals = [
  { name: 'Comepay', icon: '/icons/comepay.svg' },
  { name: 'Связной', icon: '/icons/svyaznoy.svg' },
  { name: 'Евросеть', icon: '/icons/euroset.svg' },
];
const bank = [
  { name: 'Банковский расчет', icon: '/icons/bank.svg' },
];
</script>

<template>
  <section class="w-full flex justify-center items-center bg-[#f7f7f7]" style="min-height: 856px; max-width: 1920px; margin: 0 auto;">
    <div class="w-[1160px] mx-auto my-0">
      <h2 class="text-[42px] font-bold text-center mb-12 mt-0">Способы оплаты в Типографии</h2>
      <div class="grid grid-cols-2 grid-rows-2 gap-0 rounded-2xl overflow-hidden bg-white shadow-sm">
        <!-- 1 -->
        <div class="flex flex-col items-center justify-center border-b border-r border-[#ececec] py-12 px-8">
          <div class="mb-6 text-lg font-medium">Любые банковские карты</div>
          <div class="flex gap-8 items-center">
            <img v-for="item in cards" :key="item.name" :src="item.icon" :alt="item.name" class="h-10" />
          </div>
        </div>
        <!-- 2 -->
        <div class="flex flex-col items-center justify-center border-b border-[#ececec] py-12 px-8">
          <div class="mb-6 text-lg font-medium">Электронные деньги и кошельки</div>
          <div class="flex gap-8 items-center">
            <img v-for="item in wallets" :key="item.name" :src="item.icon" :alt="item.name" class="h-10" />
          </div>
        </div>
        <!-- 3 -->
        <div class="flex flex-col items-center justify-center border-r border-[#ececec] py-12 px-8">
          <div class="mb-6 text-lg font-medium">Наличные через терминалы</div>
          <div class="flex gap-8 items-center">
            <img v-for="item in terminals" :key="item.name" :src="item.icon" :alt="item.name" class="h-10" />
          </div>
        </div>
        <!-- 4 -->
        <div class="flex flex-col items-center justify-center py-12 px-8">
          <div class="mb-6 text-lg font-medium">Безналичный расчёт (для ИП и юридических лиц)</div>
          <div class="flex gap-8 items-center">
            <img v-for="item in bank" :key="item.name" :src="item.icon" :alt="item.name" class="h-10" />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
section {
  min-width: 100vw;
  background: #f7f7f7;
}
</style> 