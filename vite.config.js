import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

const host = "http://localhost:8000";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
