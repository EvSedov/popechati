<script setup lang="ts">
import { ref, watch, onUnmounted, computed } from "vue";
import CustomSelect from "@/Components/molecules/CustomSelect.vue";

// Change isOpen to a prop, using modelValue for v-model compatibility
const props = defineProps({
    modelValue: {
        type: Boolean,
        required: true,
    },
});

// Define emits for updating the prop
const emit = defineEmits(["update:modelValue"]);

const closeModal = () => {
    // Emit event to update parent's state
    emit("update:modelValue", false);
    resetFormFields(); // Очищаем поля при закрытии модального окна
};

// Новые reactive-переменные для полей формы
const fullName = ref("");
const selectedService = ref("");
const phoneNumber = ref("");
const description = ref("");

const quantity = ref<number | null>(null);
const agree = ref<boolean>(false);

// const serviceOptions = [
//     { value: "business-cards", label: "Печать визиток" },
//     {
//         value: "sheet-printing",
//         label: "Листовая полиграфия",
//     },
//     {
//         value: "multi-page-printing",
//         label: "Многостраничная полиграфия",
//     },
//     { value: "stickers", label: "Печать наклеек" },
//     {
//         value: "acrylic-printing",
//         label: "Печать на акриле",
//     },
//     { value: "packaging", label: "Печать на упаковке" },
//     {
//         value: "bags-and-packages",
//         label: "Печать на пакетах и сумках",
//     },
//     {
//         value: "wrapping-paper",
//         label: "Печать на упаковочной бумаге",
//     },
//     {
//         value: "offset-printing",
//         label: "Офсетная печать",
//     },
//     {
//         value: "corporate-merch",
//         label: "Печать корпоративного мерча",
//     },
//     { value: "souvenirs", label: "Печать сувениров" },
//     {
//         value: "interior-printing",
//         label: "Интерьерная печать",
//     },
//     {
//         value: "wide-format-printing",
//         label: "Широкоформатная печать",
//     },
//     { value: "calendars", label: "Печать календарей" },
//     { value: "clothing", label: "Печать на одежде" },
//     {
//         value: "stands-press-roll-up",
//         label: "Печать стендов Press wall, Roll Up",
//     },
//     { value: "cards", label: "Печать открыток" },
//     { value: "invitations", label: "Печать приглашений" },
//     { value: "flyers", label: "Печать листовок" },
//     { value: "posters", label: "Печать плакатов" },
//     { value: "tickets", label: "Печать билетов" },
//     { value: "certificates", label: "Печать сертификатов" },
//     { value: "diplomas", label: "Печать дипломов" },
//     { value: "brochures", label: "Печать буклетов" },
//     { value: "envelopes", label: "Печать конвертов" },
//     { value: "bookmarks", label: "Печать закладок" },
// ];

// Вычисляемое свойство для расчета количества заполненных полей
const completedFieldsCount = computed(() => {
    let count = 0;
    if (fullName.value.trim() !== "") {
        count++;
    }
    if (selectedService.value !== "") {
        count++;
    }
    if (phoneNumber.value.trim() !== "") {
        count++;
    }
    if (description.value.trim() !== "") {
        count++;
    }
    return count;
});

// Вычисляемое свойство для отображения процента скидки (0-20%)
const discountPercentage = computed(() => {
    return completedFieldsCount.value * 5;
});

// Вычисляемое свойство для ширины прогресс-бара (0-100%)
const progressBarWidth = computed(() => {
    // Каждое заполненное поле дает 25% ширины прогресс-бара
    return completedFieldsCount.value * 25;
});

// Функция для сброса всех полей формы
const resetFormFields = () => {
    fullName.value = "";
    selectedService.value = ""; // Или [] если CustomSelect в режиме multiple
    phoneNumber.value = "";
    description.value = "";
    quantity.value = null;
    agree.value = false;
};

// Функция для обработки отправки заказа
const handleSubmitOrder = () => {
    // Здесь будет логика отправки данных на сервер
    console.log("Форма отправлена!");
    console.log("ФИО:", fullName.value);
    console.log("Услуга:", selectedService.value);
    console.log("Телефон:", phoneNumber.value);
    console.log("Описание:", description.value);
    console.log("Количество:", quantity.value);

    // Очищаем форму и закрываем модальное окно
    resetFormFields();
    closeModal();
};

watch(
    () => props.modelValue,
    (newValue) => {
        if (newValue) {
            document.body.style.overflow = "hidden";
        } else {
            document.body.style.overflow = "";
        }
    },
    { immediate: true },
);

onUnmounted(() => {
    document.body.style.overflow = "";
});
</script>

<template>
    <div
        v-if="modelValue"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4"
        @click.self="closeModal"
    >
        <!-- Modal Content -->
        <div
            class="relative z-10 flex max-h-[calc(100vh-2rem)] w-full max-w-[1104px] flex-col rounded-3xl bg-white shadow-lg"
        >
            <!-- Modal Header -->
            <div
                class="flex flex-shrink-0 items-center justify-between px-4 py-4 md:px-8 md:py-8 lg:py-12 lg:pl-16 xl:py-[64px] xl:pl-[140px]"
            >
                <h2
                    class="text-[24px] leading-[1.16em] font-bold text-black sm:text-[32px]"
                >
                    Сделать заказ
                </h2>
                <!-- Close button -->
                <button
                    @click="closeModal"
                    class="flex-shrink-0 p-2 text-black hover:scale-120 hover:font-black hover:text-gray-700"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-8 w-8"
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
                </button>
            </div>
            <!--Container for Left and Right Columns, makes the entire modal content area grow vertically -->
            <div class="flex flex-grow flex-col lg:flex-row-reverse">
                <!-- Right Column (Progress Bar) -->
                <div
                    class="w-full flex-shrink-0 px-4 pt-4 md:px-8 lg:w-1/3 lg:min-w-[248px] lg:pt-[64px] lg:pr-16 lg:pl-6 xl:pr-[140px]"
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
                            {{ discountPercentage }}%
                        </p>
                    </div>
                    <!-- Progress Bar -->
                    <div
                        class="mb-2 h-2 w-full max-w-51 rounded-md bg-[#F6F7F8]"
                    >
                        <div
                            class="h-2 rounded-md bg-[#1882F0]"
                            :style="{ width: progressBarWidth + '%' }"
                        ></div>
                    </div>
                    <p
                        class="text-[14px] leading-[1.42em] font-normal text-[#0000008A]"
                    >
                        +5% за каждый пункт
                    </p>
                </div>

                <!-- Left Column (Form and Footer) -->
                <div
                    class="flex w-full flex-grow flex-col px-4 py-4 md:px-8 md:py-8 lg:w-2/3 lg:py-12 lg:pl-16 xl:py-[64px] xl:pl-[140px]"
                >
                    <!-- Modal Body (Form) - This is the main scrollable area -->
                    <div
                        class="flex min-h-0 flex-grow flex-col gap-6 overflow-y-auto px-2.5 pb-8"
                    >
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
                                v-model="fullName"
                            />
                        </div>

                        <!-- "Выберите услугу" Section -->
                        <div>
                            <h3
                                class="mb-5 text-[21px] leading-[1.33em] font-normal text-[#000000CC]"
                            >
                                Укажите услугу
                            </h3>

                            <input
                                type="text"
                                placeholder="Какой тип услуги Вам нужен?"
                                class="w-full rounded-xl bg-[#244A7F0F] px-4 py-3 text-[16px] leading-[1.5em] text-[#0000008A] placeholder-[#0000008A] outline-none focus:ring-2 focus:ring-blue-500"
                                v-model="selectedService"
                            />
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
                                v-model="phoneNumber"
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
                                v-model="description"
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
                            <div
                                class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4"
                            >
                                <!-- "Прикрепите файлы" box -->
                                <div
                                    class="flex h-[80px] w-[125px] cursor-pointer flex-col items-center justify-center rounded-md border-3 border-dashed border-[#1882F0] p-4 text-center"
                                >
                                    <svg
                                        width="19"
                                        height="26"
                                        viewBox="0 0 19 26"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M12.5 0.125L18.75 6.375H12.5V0.125ZM10.9375 6.375C10.9375 7.25391 11.6211 7.9375 12.5 7.9375H18.75V22.7812C18.75 24.0996 17.6758 25.125 16.4062 25.125H2.34375C1.02539 25.125 0 24.0996 0 22.7812V2.46875C0 1.19922 1.02539 0.125 2.34375 0.125H10.9375V6.375ZM14.0625 16.9707C14.5508 16.5312 14.5508 15.7988 14.0625 15.3105L10.1562 11.4043C9.7168 10.9648 8.98438 10.9648 8.54492 11.4043L4.63867 15.3105C4.15039 15.7988 4.15039 16.5312 4.63867 16.9707C5.07812 17.459 5.81055 17.459 6.25 16.9707L8.20312 15.0664V20.0469C8.20312 20.7305 8.69141 21.2188 9.375 21.2188C10.0098 21.2188 10.5469 20.7305 10.5469 20.0469V15.0664L12.4512 16.9707C12.6465 17.2148 12.9395 17.3125 13.2812 17.3125C13.5742 17.3125 13.8672 17.2148 14.0625 16.9707Z"
                                            fill="#1882F0"
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
                    </div>

                    <!-- Footer section with agreement and button - flex-shrink-0 to prevent it from shrinking -->
                    <div
                        class="flex flex-shrink-0 items-center justify-between pt-8"
                    >
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
                                class="rounded-xl bg-[#1882F0] px-8 py-4 text-[16px] leading-[1.25em] font-medium text-white hover:bg-blue-600"
                                :class="{ btnDisabled: !agree }"
                                @click="handleSubmitOrder"
                            >
                                Сделать заказ
                            </button>
                        </div>
                    </div>
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
/* Add any component-specific styles here if needed, though Tailwind should cover most */
</style>
