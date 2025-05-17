<script setup lang="ts">
import YandexMap from '@/Components/molecules/YandexMap.vue';
import FaqAccordion from '@/Components/molecules/FaqAccordion.vue';
import ContactDetails from '@/Components/molecules/ContactDetails.vue';

// Данные для FAQ
const faqItems = [
  {
    question: 'Как сделать заказ?',
    answer: 'Подробная информация о процессе оформления заказа в нашей компании.'
  },
  {
    question: 'Где какать?',
    answer: 'Информация о расположении санитарных зон в нашем офисе.'
  },
  {
    question: 'Как покупать в рассрочку?',
    answer: 'Подробная информация о возможностях покупки товаров в рассрочку.'
  },
  {
    question: 'Как еще можно получить у вас футболку?',
    answer: 'Информация о специальных предложениях и акциях компании.'
  },
  {
    question: 'Как начисляется кэшбэк?',
    answer: 'Детальная информация о программе лояльности и начислении кэшбэка.'
  }
];
</script>

<template>
  <div id="contacts" class="w-full pt-[80px] pb-[80px]">
    <div class="mx-auto w-[1170px]">
      <!-- Заголовок секции -->
      <h2 class="mb-10 text-center text-[42px] font-semibold text-[#2C2C2C]">
        Контактная информация
      </h2>
      
      <!-- Контактная информация с картой -->
      <div class="flex flex-row gap-8 mb-16">
        <!-- Левая колонка: Карта и FAQ -->
        <div class="w-[60%] flex flex-col">
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
h2 {
  font-family: "Commissioner";
}

h3 {
  font-weight: 500;
  font-family: "Commissioner";
}

.text-blue-600 {
  color: #1882F0;
}

/* Стили для секции FAQ */
button:focus {
  outline: none;
}

.prose p {
  margin-bottom: 0.5rem;
}

button span {
  font-family: "Commissioner";
}
</style> 