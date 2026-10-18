import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/style.scss', 'resources/css/app.css', 'resources/js/app.js', 'resources/js/chart.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
    build: {
        rollupOptions: {
            output: {
                chunkFileNames: 'assets/js/[name].js',
                entryFileNames: 'assets/js/[name].js',
                assetFileNames: ({ name }) => {
                    if (/\.(gif|jpe?g|png|svg)$/.test(name ?? '')) {
                        return 'assets/images/[name][extname]';
                    }

                    if (/\.css$/.test(name ?? '')) {
                        return 'assets/css/[name][extname]';
                    }

                    return 'assets/[name][extname]';
                },
            },
        },
    },
});
