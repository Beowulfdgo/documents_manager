import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/assets/filepond/js/filepond.js',
                'resources/assets/filepond/css/filepond.css',
            ],
            refresh: true,
        }),
    ],
});
