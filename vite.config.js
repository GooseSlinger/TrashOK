import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/fancybox.js',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/download/jquery.js',
                'resources/css/fancybox.css',
            ],
            refresh: true,
        }),
    ],
});
