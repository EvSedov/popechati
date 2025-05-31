<script setup lang="ts">
import { ref } from "vue";
import Logo from "@/Components/atoms/Logo.vue";
import Menu from "@/Components/molecules/Menu.vue";
import { Button } from "@/Components/atoms/ui/button";
import BasketShopping from "@/Components/atoms/icons/BasketShopping.vue";
import OrderModal from "@/Components/organisms/OrderModal.vue";

const orderModalRef = ref<InstanceType<typeof OrderModal> | null>(null);

const openOrderModal = () => {
    orderModalRef.value?.openModal();
};
</script>

<template>
    <div class="header">
        <div class="container flex items-center">
            <Logo class="mr-20" />
            <Menu />
            <!--<Socials />-->
            <Button
                class="ml-auto border-2 border-[#BA2150] bg-linear-to-r from-[#F10488] to-[#FF0224] px-6 tracking-wider text-white"
                @click="openOrderModal"
            >
                <BasketShopping class="h-3.75 w-4.25" />
                Создать заказ
            </Button>
        </div>
    </div>

    <!-- Order Modal Component -->
    <OrderModal ref="orderModalRef" />
</template>

<style lang="css" scoped>
.header {
    width: 100%;
}
.container {
    max-width: 1590px;
    margin: 0 auto;
    padding: 12px 0 0;
}
</style>
