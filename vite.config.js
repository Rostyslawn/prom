import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/scss/imports.scss',
                'resources/scss/cart.scss',
                'public/js/inputmask.js',
                'resources/scss/category.scss',
            ],
            refresh: true,
        }),
    ],
});
