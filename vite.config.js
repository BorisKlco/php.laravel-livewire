import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import dns from 'node:dns'

dns.setDefaultResultOrder('verbatim')

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        origin: 'http://138.2.144.113:5173',
        hmr: {
            host: '138.2.144.113',
        },
    },
});
