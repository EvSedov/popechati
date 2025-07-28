/// <reference types="vitest" />
import { mergeConfig } from "vite";
import { defineConfig } from "vitest/config";
import viteConfig from "../vite.config.js";
import path from "path";

export default mergeConfig(
    viteConfig,
    defineConfig({
        plugins: [], // Пустой массив плагинов, чтобы не дублировать плагины из основной конфигурации
        test: {
            globals: true,
            environment: "jsdom",
            setupFiles: ["./setup.ts"],
            include: ["**/*.{test,spec}.{js,mjs,cjs,ts,mts,cts,jsx,tsx}"],
        },
        resolve: {
            alias: {
                "@": path.resolve(__dirname, "../resources/js"),
            },
        },
    }),
);
