import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { VitePWA } from 'vite-plugin-pwa'
import vue from '@vitejs/plugin-vue'
import { dynamicImport } from 'vite-plugin-dynamic-import'
// const path = require('path')

export default defineConfig({
    // resolve: {
    //     alias:{
    //         '@':path.resolve(__dirname,'./resources/ts')
    //     },
    // },
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/ts/app.ts',
        ]),

        vue(),
        VitePWA(),
        // dynamicImport(),

    ],
});
