import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import  FilePond from "./resources/assets/filepond/js/filepond.js";
import   "./resources/assets/filepond/css/filepond.css";
import   "./resources/assets/filepond/css/filepond-plugin-image-preview.css";
import   "./resources/assets/filepond/js/filepond-plugin-image-preview.js";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/assets/filepond/js/filepond.js',
                'resources/assets/filepond/css/filepond.css',
                'resources/assets/filepond/css/filepond-plugin-image-preview.css',
                'resources/assets/filepond/js/filepond-plugin-image-preview.js',
                
 
                'public/theme/dist/assets/js/widgets.bundle.js',
                'public/theme/dist/assets/plugins/custom/datatables/datatables.bundle.js',
                'public/theme/dist/assets/css/style.bundle.css',
                'public/theme/dist/assets/js/scripts.bundle.js',
                'public/theme/dist/assets/css/style.bundle.rtl.css',
                'public/theme/dist/assets/plugins/global/plugins.bundle.js'
                

            ],
            refresh: true,
        }),
    ],
});
