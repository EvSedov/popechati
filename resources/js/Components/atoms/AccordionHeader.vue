<script setup lang="ts">
defineProps<{
  title: string;
}>();
</script>

<template>
  <h3 class="mb-6 text-[28px] font-black text-[#2C2C2C] text-center">
    {{ title }}
  </h3>
</template>

<style scoped>
h3 {
  font-weight: 900;
  font-family: "Commissioner";
}
</style> 