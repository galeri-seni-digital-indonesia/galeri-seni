import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                    'resources/js/app.js',
                    'resources/js/data/art-api.js',
                    'resources/js/data/event-api.js',
                    'resources/js/data/artist-api.js',
                    'resources/js/data/merch-api.js',
                    'resources/js/utils/art-recommendation.js',
                    'resources/js/utils/event-details.js'
                   ],
            refresh: true,
        }),
    ],
});
