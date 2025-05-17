<script setup lang="ts">
defineProps<{
  answer: string;
  isVisible: boolean;
}>();
</script>

<template>
  <div 
    v-show="isVisible" 
    class="pb-5 prose max-w-none"
  >
    <p class="text-sm text-gray-600 leading-relaxed">{{ answer }}</p>
  </div>
</template>

<style scoped>
.prose p {
  margin-bottom: 0.5rem;
}
</style> 