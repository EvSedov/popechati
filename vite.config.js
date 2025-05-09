import path from "node:path";
import { defineConfig } from "vite";
import vuePlugin from "@vitejs/plugin-vue";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        vuePlugin(),
        tailwindcss(),
    ],
    build: {
        outDir: "dist", // Папка для сборки
        emptyOutDir: true,
    },
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
});
