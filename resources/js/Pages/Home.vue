<script setup lang="ts">
import Header from "@/Components/Header.vue";
import Discount from "@/Components/Discount.vue";
import Footer from "@/Components/Footer.vue";
import HeroSection from "@/Components/section/Hero.vue";
import HowWeWork from "@/Components/HowWeWork.vue";
import ExamplesTShirts from "@/Components/ExamplesTShirts.vue";
</script>

<template>
    <div class="wrap">
        <Header />
    </div>
    <div class="main grow">
        <div class="wrap bg-bg-main">
            <Discount />
            <HeroSection />
            <HowWeWork />
            <ExamplesTShirts />
        </div>
    </div>
    <Footer />
</template>

<style scoped lang="css">
.main {
    width: 100%;
}
.wrap {
    width: 100%;
    max-width: 1920px;
    margin: 0 auto;
    padding-top: 10px;
}
</style>
