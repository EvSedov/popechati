<script lang="ts" setup></script>
<template>
    <div class="h-[705px] w-full pt-[160px]">
        <h2 class="mb-10 text-center text-[42px] font-semibold text-[#2C2C2C]">
            Примеры: Футболок
        </h2>
        <div class="mx-auto flex w-fit gap-5.5">
            <div
                class="example-tshirt-1 relative h-89 w-89 overflow-hidden rounded-xl"
            >
                <div
                    class="absolute top-0 right-0 bottom-0 left-0 flex items-end bg-black/25"
                >
                    <p class="mb-4 ml-5 text-lg font-semibold text-white">
                        🔥 Сексуальная футблока
                    </p>
                </div>
            </div>
            <div
                class="example-tshirt-2 relative h-89 w-89 overflow-hidden rounded-xl"
            >
                <div
                    class="absolute top-0 right-0 bottom-0 left-0 flex items-end bg-black/25"
                >
                    <p class="mb-4 ml-5 text-lg font-semibold text-white">
                        🔥 Аниме для мужчин
                    </p>
                </div>
            </div>
            <div
                class="example-tshirt-3 relative h-89 w-89 overflow-hidden rounded-xl"
            >
                <div
                    class="absolute top-0 right-0 bottom-0 left-0 flex items-end bg-black/25"
                >
                    <p class="mb-4 ml-5 text-lg font-semibold text-white">
                        🔥 Любителям котиков
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
h2 {
    font-family: "Commissioner";
}
.example-tshirt-1 {
    background-image: url('/images/examp-1.jpg');
    background-size: cover;
    background-position: center;
}
.example-tshirt-2 {
    background-image: url('/images/examp-2.jpg');
    background-size: cover;
    background-position: center;
}
.example-tshirt-3 {
    background-image: url('/images/examp-3.jpg');
    background-size: cover;
    background-position: center;
}
</style> 