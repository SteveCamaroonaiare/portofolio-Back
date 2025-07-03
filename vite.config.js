import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { server } from 'typescript';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: true,
        port: 3000,
    }
});
