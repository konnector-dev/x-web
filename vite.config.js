import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

const host=  '99.99.9.4';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
                'resources/views/**',
            ],
        }),
    ],
    server: {
        host,
        hmr: {
            host: host
        }
    }
});
