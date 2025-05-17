<script setup lang="ts">
import Header from "@/Components/organisms/Header.vue";
import Discount from "@/Components/molecules/Discount.vue";
import Footer from "@/Components/organisms/Footer.vue";
import HeroSection from "@/Components/templates/Hero.vue";
import HowWeWork from "@/Components/templates/HowWeWork.vue";
import ExamplesTShirts from "@/Components/templates/ExamplesTShirts.vue";
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
