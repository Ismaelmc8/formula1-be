import { defineConfig } from 'vite';
import dns from 'dns'
import laravel from 'laravel-vite-plugin';

dns.getDefaultResultOrder('verbatim')

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
