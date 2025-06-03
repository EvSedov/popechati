<script lang="ts" setup>
import { ref, computed, defineProps } from "vue";

// Вспомогательная функция для генерации динамических путей к изображениям
const getImageUrl = (name: string) => {
    // Теперь правильно формируем путь: /resources/images/ + имя_файла
    return new URL(`/public/images/${name}`, import.meta.url).href;
};

// Определяем пропсы, которые этот компонент будет принимать
interface Props {
    activeFilters: string[]; // Массив строк с активными значениями фильтров
}
const props = defineProps<Props>();

// Пример данных для футболок (вам нужно будет адаптировать это под свою реальную структуру данных)
interface ExampleProduct {
    id: number;
    name: string;
    image: string;
    category: string[];
}

const allTShirtExamples = ref<ExampleProduct[]>([
    {
        id: 1,
        name: "🔥 Сексуальная футболка",
        image: "examp-1.jpg",
        category: ["t-shirts", "for-men"],
    },
    {
        id: 2,
        name: "🔥 Аниме для мужчин",
        image: "examp-2.jpg",
        category: ["t-shirts", "anime", "for-men"],
    },
    {
        id: 3,
        name: "🔥 Любителям котиков",
        image: "examp-3.jpg",
        category: ["t-shirts", "for-women", "animals"],
    },
    // ... другие примеры футболок
]);

// Вычисляемое свойство для отображения отфильтрованных футболок
const filteredExamples = computed(() => {
    if (props.activeFilters.length === 0) {
        // Если нет активных фильтров, показываем все футболки
        return allTShirtExamples.value;
    } else {
        // Фильтруем футболки: показываем только те, чьи категории пересекаются с активными фильтрами
        return allTShirtExamples.value.filter((tshirt) =>
            props.activeFilters.some((filter) =>
                tshirt.category.includes(filter),
            ),
        );
    }
});
</script>
<template>
    <div class="h-[705px] w-full">
        <div class="mx-auto flex w-fit gap-5.5">
            <div
                v-for="example in filteredExamples"
                :key="example.id"
                class="relative h-89 w-89 overflow-hidden rounded-xl"
                :style="{
                    backgroundImage: `url(${getImageUrl(example.image)})`,
                    backgroundSize: 'cover',
                    backgroundPosition: 'center',
                }"
            >
                <div
                    class="absolute top-0 right-0 bottom-0 left-0 flex items-end bg-black/25"
                >
                    <p class="mb-4 ml-5 text-lg font-semibold text-white">
                        {{ example.name }}
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
</style>
