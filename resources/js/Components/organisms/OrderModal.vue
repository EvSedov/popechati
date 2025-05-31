<script setup lang="ts">
import { ref, watch } from "vue";
import Button from "../atoms/ui/button/Button.vue";

const isOpen = ref(false);
const agree = ref<boolean>(false);

const openModal = () => {
    isOpen.value = true;
};

const closeModal = () => {
    isOpen.value = false;
};

defineExpose({
    openModal,
});

watch(agree, () => console.log(agree));
</script>

<template>
    <div
        v-if="isOpen"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4"
        @click.self="closeModal"
    >
        <!-- Overlay (handled by bg-black/50 on the parent) -->

        <!-- Modal Content -->
        <div
            class="relative z-10 flex w-full max-w-[1104px] overflow-hidden rounded-3xl bg-white shadow-lg"
        >
            <!--Container from Left and Right Columns-->
            <div class="flex gap-4 px-[140px]">
                <!-- Left Column (Form and Footer) -->
                <div class="flex flex-grow flex-col py-[64px]">
                    <!-- Modal Header -->
                    <div class="mb-8 flex items-center justify-between">
                        <h2
                            class="text-[24px] leading-[1.16em] font-normal text-[#000000CC]"
                        >
                            Сделать заказ
                        </h2>
                        <!-- Close button 
                        <button
                            @click="closeModal"
                            class="text-[#000000CC] hover:text-gray-700"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"
                                />
                            </svg>
                        </button>-->
                    </div>

                    <!-- Modal Body (Form) -->
                    <div class="mb-8 flex flex-col gap-6">
                        <!-- "Как к вам обращаться?" Section -->
                        <div>
                            <h3
                                class="mb-5 text-[21px] leading-[1.33em] font-normal text-[#000000CC]"
                            >
                                Как к вам обращаться?
                            </h3>
                            <input
                                type="text"
                                placeholder="Введите ФИО*"
                                class="w-full rounded-xl bg-[#244A7F0F] px-4 py-3 text-[16px] leading-[1.5em] text-[#0000008A] placeholder-[#0000008A] outline-none focus:ring-2 focus:ring-blue-500"
                            />
                        </div>

                        <!-- "Выберите услугу" Section -->
                        <div>
                            <h3
                                class="mb-5 text-[21px] leading-[1.33em] font-normal text-[#000000CC]"
                            >
                                Выберите услугу
                            </h3>
                            <!-- Combobox/Select (simplified for now) -->
                            <select
                                class="w-full rounded-xl bg-[#244A7F0F] px-4 py-3 text-[16px] leading-[1.5em] text-[#0000008A] placeholder-[#0000008A] outline-none focus:ring-2 focus:ring-blue-500"
                            >
                                <option value="" class="text-[#0000008A]">
                                    <span class="text-[16px] leading-[1.5em]"
                                        >Какой тип услуги Вам нужен?</span
                                    >
                                </option>
                                <option value="" class="text-[#0000008A]">
                                    <span class="text-[16px] leading-[1.5em]"
                                        >Какой тип услуги Вам нужен?</span
                                    >
                                </option>
                                <option value="" class="text-[#0000008A]">
                                    <span class="text-[16px] leading-[1.5em]"
                                        >Какой тип услуги Вам нужен?</span
                                    >
                                </option>
                                <!-- Add service options here -->
                            </select>
                        </div>

                        <!-- "Контактные данные" Section -->
                        <div>
                            <h3
                                class="mb-5 text-[21px] leading-[1.33em] font-normal text-[#000000CC]"
                            >
                                Контактные данные
                            </h3>
                            <input
                                type="tel"
                                placeholder="Введите номер телефона*"
                                class="w-full rounded-xl bg-[#244A7F0F] px-4 py-3 text-[16px] leading-[1.5em] text-[#0000008A] placeholder-[#0000008A] outline-none focus:ring-2 focus:ring-blue-500"
                            />
                        </div>

                        <!-- "Описание" Section -->
                        <div>
                            <h3
                                class="mb-5 text-[21px] leading-[1.33em] font-normal text-[#000000CC]"
                            >
                                Описание
                            </h3>
                            <textarea
                                placeholder="Введите описание"
                                class="h-32 w-full rounded-xl bg-[#244A7F0F] px-4 py-3 text-[16px] leading-[1.5em] text-[#0000008A] placeholder-[#0000008A] outline-none focus:ring-2 focus:ring-blue-500"
                            ></textarea>
                        </div>

                        <!-- File Upload Section -->
                        <div>
                            <div class="mb-4 flex items-center">
                                <h3
                                    class="text-[16px] leading-[1.5em] font-normal text-[#000000CC]"
                                >
                                    Возможно у вас есть макет, прикрепите его
                                    (по желанию)
                                </h3>
                            </div>
                            <!-- File upload area -->
                            <div class="grid grid-cols-3 gap-4">
                                <!-- "Прикрепите файлы" box -->
                                <div
                                    class="flex h-[80px] w-[125px] cursor-pointer flex-col items-center justify-center rounded-md border-3 border-dashed border-[#1882F0] p-4 text-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512"
                                        class="h-6 w-6 text-[#1882F0]"
                                    >
                                        <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            fill="#1882F0"
                                            d="M288 109.3V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V109.3C204.6 122.8 192 141.9 192 160c0 35.3 28.7 64 64 64s64-28.7 64-64c0-18.1-12.6-37.2-32-50.7zM192 416H320c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32zM448 192H312.1c6.4 9.1 10.1 20.3 10.1 32.9c0 35.3-28.7 64-64 64s-64-28.7-64-64c0-12.6 3.7-23.8 10.1-32.9H64c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64z"
                                        />
                                    </svg>
                                    <p
                                        class="text-[8px] leading-[3em] text-[#1882F0]"
                                    >
                                        Прикрепите файлы
                                    </p>
                                    <input
                                        type="file"
                                        multiple
                                        class="hidden"
                                    />
                                </div>
                                <!-- Placeholder for uploaded file previews -->
                                <div
                                    v-for="i in 5"
                                    :key="i"
                                    class="flex h-[80px] w-[125px] items-center justify-center rounded-md bg-[#D9D9D9]"
                                ></div>
                            </div>
                        </div>

                        <!-- "Укажите желаемое количество" Section -->
                        <div>
                            <h3
                                class="mb-4 text-[14px] leading-[1.42em] font-normal text-[#000000CC]"
                            >
                                Укажите желаемое количество
                            </h3>
                            <!-- Quantity input with values and slider (simplified) -->
                            <div class="flex flex-col">
                                <div class="mb-2 flex items-center">
                                    <input
                                        type="text"
                                        value="55 000 шт"
                                        class="w-32 border-none bg-transparent p-0 text-[19.6875px] leading-[1.21em] font-normal text-[#000000CC] outline-none"
                                        readonly
                                    />
                                    <!-- Icon can be added here if needed -->
                                </div>
                                <!-- Slider representation -->
                                <div
                                    class="relative mb-2 h-2 w-full rounded-md bg-[#F6F7F8]"
                                >
                                    <div
                                        class="absolute top-0 left-0 h-2 rounded-md bg-[#1882F0]"
                                        style="width: 20%"
                                    ></div>
                                    <!-- Example width -->
                                </div>
                                <!-- Quantity steps -->
                                <div
                                    class="flex justify-between text-[13px] leading-[1.53em] font-normal text-[#000000CC]"
                                >
                                    <span>15 000 шт</span>
                                    <span>100 000 шт</span>
                                    <span>500 000 шт</span>
                                    <span>1 000 000 шт</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer section with agreement and button -->
                    <div class="mt-auto flex items-center justify-between pt-8">
                        <!-- Use mt-auto to push to bottom and flex for horizontal layout -->
                        <!-- Agreement Checkbox -->
                        <div class="flex w-2/3 items-start">
                            <!-- Adjust width as needed -->
                            <input
                                type="checkbox"
                                id="agreement"
                                class="mt-1 mr-2 flex-shrink-0"
                                v-model="agree"
                            />
                            <label
                                for="agreement"
                                class="text-[13px] leading-[1.53em] font-normal text-[rgba(0,0,0,0.4)]"
                            >
                                Заполняя форму, я принимаю
                                <a href="#" class="text-[#126DF7]">
                                    условия передачи информации
                                </a>
                                и даю
                                <a href="#" class="text-[#126DF7]">
                                    согласие на получение информации о продуктах
                                    и
                                    <span class="font-bold">popechati.com</span>
                                </a>
                            </label>
                        </div>

                        <!-- Modal Footer (Submit button) -->
                        <div class="flex-shrink-0">
                            <!-- Prevent button from shrinking -->
                            <button
                                class="rounded-xl bg-[#1882F0] px-8! py-4! text-[16px] leading-[1.25em] font-medium text-white hover:bg-blue-600"
                                :class="{ btnDisabled: !agree }"
                            >
                                Сделать заказ
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Progress Bar) -->
                <div
                    class="flex w-[248px] flex-shrink-0 flex-col px-6 pt-[64px]"
                >
                    <div class="mb-4">
                        <h3
                            class="text-[14px] leading-[1.42em] font-normal text-[#0000008A]"
                        >
                            Шкала заполнения формы:
                        </h3>
                        <p
                            class="text-[21px] leading-[1.33em] font-normal text-[#000000CC]"
                        >
                            5%
                        </p>
                    </div>
                    <!-- Progress Bar -->
                    <div class="mb-2 h-2 w-full rounded-md bg-[#F6F7F8]">
                        <div
                            class="h-2 rounded-md bg-[#1882F0]"
                            style="width: 5%"
                        ></div>
                    </div>
                    <p
                        class="text-[14px] leading-[1.42em] font-normal text-[#0000008A]"
                    >
                        +15% за каждый пункт
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.btnDisabled {
    opacity: 0.5;
    cursor: not-allowed;
}
</style>
