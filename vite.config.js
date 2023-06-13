import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    // server:{
    //     host:'192.168.254.68'
    // }
    // ,
    
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/dropzone.js',
            ],
            refresh: true,
        }),
    ],
});
