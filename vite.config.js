import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/less/components/header.css',
                'resources/less/components/footer.css',
                'resources/less/components/vehicle.css',
                'resources/less/components/sold.css',
                'resources/less/home.css',
                'resources/less/aos.css',
                'resources/less/templates/show.css',
                'resources/js/app.js',
                'resources/js/custom.js',
                'resources/js/aos.js',
            ],
            refresh: true,
        }),
    ],
});
