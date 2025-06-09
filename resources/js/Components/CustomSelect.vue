<script setup lang="ts">
import { ref, watch, computed } from "vue";

const props = defineProps({
    modelValue: {
        type: String,
        default: "",
    },
    options: {
        type: Array<{ value: string; label: string }>,
        required: true,
    },
    placeholder: {
        type: String,
        default: "Выберите опцию",
    },
});

const emit = defineEmits(["update:modelValue"]);

const isOpen = ref(false);
const selectedOption = ref(props.modelValue);

// Вычисляемое свойство для отображения выбранной опции
const displayedValue = computed(() => {
    const option = props.options.find(
        (opt) => opt.value === selectedOption.value,
    );
    return option ? option.label : props.placeholder;
});

// Открытие/закрытие выпадающего списка
const toggleDropdown = () => {
    isOpen.value = !isOpen.value;
};

// Выбор опции
const selectOption = (option: { value: string; label: string }) => {
    selectedOption.value = option.value;
    emit("update:modelValue", option.value);
    isOpen.value = false;
};

// Закрытие при клике вне компонента
const onClickOutside = (event: MouseEvent) => {
    const target = event.target as HTMLElement;
    if (!target.closest(".custom-select-container")) {
        isOpen.value = false;
    }
};

watch(isOpen, (newValue) => {
    if (newValue) {
        document.addEventListener("click", onClickOutside);
    } else {
        document.removeEventListener("click", onClickOutside);
    }
});

watch(
    () => props.modelValue,
    (newValue) => {
        selectedOption.value = newValue;
    },
);
</script>

<template>
    <div class="custom-select-container relative">
        <!-- Видимый элемент, который заменяет нативный select -->
        <div
            class="flex w-full cursor-pointer items-center justify-between rounded-xl bg-[#244A7F0F] px-4 py-3 text-[16px] leading-[1.5em] text-[#0000008A] placeholder-[#0000008A] outline-none focus:ring-2 focus:ring-blue-500"
            @click="toggleDropdown"
        >
            <span>{{ displayedValue }}</span>
            <!-- Иконка стрелки -->
            <svg
                :class="{ 'rotate-180': isOpen }"
                class="h-4 w-4 transition-transform duration-200"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 9l-7 7-7-7"
                ></path>
            </svg>
        </div>

        <!-- Выпадающий список опций -->
        <div
            v-if="isOpen"
            class="absolute z-10 mt-1 w-full overflow-hidden rounded-xl border border-gray-200 bg-white shadow-lg"
        >
            <ul class="py-1">
                <li
                    v-for="option in options"
                    :key="option.value"
                    @click="selectOption(option)"
                    class="cursor-pointer px-4 py-2 text-[16px] leading-[1.5em] text-[#000000CC] hover:bg-blue-100"
                    :class="{ 'bg-blue-50': option.value === selectedOption }"
                >
                    {{ option.label }}
                </li>
            </ul>
        </div>
    </div>
</template>

<style scoped></style>
