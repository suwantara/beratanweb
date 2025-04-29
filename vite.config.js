import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss', // File SCSS utama
                'resources/js/app.js',    // File JavaScript
            ],
            refresh: true,
        }),
    ],
});
