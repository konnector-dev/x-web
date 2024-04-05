import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const host=  '12.35.1.4';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host,
        hmr: {
            host: host
        }
    }
});
