<script setup lang="ts">
import AccordionToggleIcon from '@/Components/atoms/AccordionToggleIcon.vue';

defineProps<{
  question: string;
  isOpen: boolean;
}>();

defineEmits<{
  (e: 'toggle'): void;
}>();
</script>

<template>
  <button 
    @click="$emit('toggle')" 
    class="flex justify-between items-center w-full py-4 text-left focus:outline-none"
  >
    <span class="text-base text-[#2C2C2C]">{{ question }}</span>
    <AccordionToggleIcon :is-open="isOpen" />
  </button>
</template>

<style scoped>
button:focus {
  outline: none;
}

button span {
  font-family: "Commissioner";
}
</style> 