<script setup lang="ts">
import Header from "@/Components/organisms/Header.vue";
import Discount from "@/Components/molecules/Discount.vue";
import Footer from "@/Components/organisms/Footer.vue";
import HeroSection from "@/Components/organisms/sections/Hero.vue";
import HowWeWork from "@/Components/organisms/sections/HowWeWork.vue";
import ExamplesTShirts from "@/Components/organisms/sections/ExamplesTShirts.vue";
import ContactInfo from "@/Components/organisms/sections/ContactInfo.vue";
import PaymentMethods from "@/Components/organisms/sections/PaymentMethods.vue";

import { ref, provide } from "vue";
import OrderModal from "@/Components/organisms/OrderModal.vue";

const isOrderModalOpen = ref(false);

const openOrderModal = () => {
    isOrderModalOpen.value = true;
};

provide("openOrderModal", openOrderModal);
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
            <ContactInfo />
            <PaymentMethods />
        </div>
    </div>
    <Footer />

    <OrderModal v-model="isOrderModalOpen" />
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
