<script setup lang="ts">
// Компонент с контактной информацией
</script>

<template>
  <div class="max-w-[335px] pl-[14px]">
    <!-- Адреса -->
    <div class="mb-6 flex gap-4">
      <h3 class="text-xl font-medium text-neutral-900 mb-2">Адреса</h3>
      <a href="#"
         class="block w-[174px] h-[34px] px-5 py-1.5 text-center text-[13px] text-[#1882F0] border border-dotted border-[#1882F0] rounded-lg leading-[22px] font-medium whitespace-nowrap">
        Центральный офис
      </a>
    </div>
    
    <!-- Контакты и номера телефонов -->
    <div class="mb-6">
      <h3 class="text-xl font-medium text-neutral-900 mb-2">Контакты и номера телефонов:</h3>
      <div class="space-y-2">
        <div class="flex items-start">
          <span class="text-xs text-neutral-900 whitespace-nowrap leading-[22px]">+7 (925) 470-94-00</span>
          <span class="text-xs text-neutral-900/50 block w-full ml-0 leading-[22px]">(Копи-центр, выдача заказов)</span>
        </div>
        <div class="flex items-start">
          <span class="text-xs text-neutral-900 whitespace-nowrap leading-[22px]">+7 (499) 398-56-01</span>
          <span class="text-xs text-neutral-900/50 block w-full ml-0 leading-[22px]">(Городской номер)</span>
        </div>
        <div>
          <span class="text-xs text-neutral-900 whitespace-nowrap leading-[22px]">+7 (977) 813-32-27</span>
          <span class="text-xs text-neutral-900/50 block w-full ml-0 leading-[22px]">(Прием заказов, консультация, сопровождение клиентов)</span>
        </div>
        <div>
          <a href="mailto:popechati@gmail.com" class="text-blue-600">popechati@gmail.com</a>
        </div>
      </div>
    </div>
    
    <!-- Дополнительная информация -->
    <div class="mb-6">
      <h3 class="text-xl font-medium text-neutral-900 mb-2">Дополнительно:</h3>
      <p class="text-neutral-700">
        В офисе есть каталог и материалов, образцы продукции, мягкие диванчики.
      </p>
    </div>
    
    <!-- Время работы -->
    <div class="mb-6">
      <h3 class="text-xl font-medium text-neutral-900 mb-2">Время работы:</h3>
      <p class="text-neutral-700">Пн - Пт 11:00 - 22:00</p>
      <p class="text-neutral-700">Сб, Вс: По договоренности!</p>
    </div>
    
    <!-- Адрес -->
    <div class="mb-6">
      <h3 class="text-xl font-medium text-neutral-900 mb-2">Адрес:</h3>
      <p class="text-neutral-700">
        Батайский проезд 59, вход между первым и вторым подъездом, офис 24 
        <span class="text-neutral-500">(Копи-центр, выдача заказов)</span>
      </p>
    </div>
    
    <!-- Проложить маршрут -->
    <div>
      <h3 class="text-xl font-medium text-neutral-900 mb-2">Проложить маршрут:</h3>
      <div class="flex space-x-4">
        <a href="#" class="text-yellow-500 w-6 h-6">
          <span class="sr-only">Яндекс</span>
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm3.5 17h-2v-6.9L9 5h2l3 4.9L17 5h2l-3.5 6.1V18z" />
          </svg>
        </a>
        <a href="#" class="text-red-500 w-6 h-6">
          <span class="sr-only">Google</span>
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.5 14h-9v-2h9v2zm0-4h-9v-2h9v2zm0-4h-9V6h9v2z" />
          </svg>
        </a>
        <a href="#" class="text-blue-500 w-6 h-6">
          <span class="sr-only">2GIS</span>
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</template>

<style scoped>
h3 {
  font-weight: 500;
  font-family: "Commissioner";
}

.text-blue-600 {
  color: #1882F0;
}
</style> 