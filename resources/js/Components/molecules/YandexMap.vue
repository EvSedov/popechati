<script setup lang="ts">
import MapButtons from '@/Components/molecules/MapButtons.vue';
const mapImage = '/images/yandex-map.jpg';
</script>

<template>
  <div class="w-full h-[300px] bg-gray-200 rounded-lg overflow-hidden relative mb-8">
    <!-- Здесь будет интеграция с Яндекс картой -->
    <img :src="mapImage" alt="Карта" class="w-full h-full object-cover" />
    
    <!-- Кнопки управления картой -->
    <MapButtons />
  </div>
</template> 