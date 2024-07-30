import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/views/admin-panel/vendor/fontawesome-free/css/all.min.css",
                "resources/views/admin-panel/vendor/jquery/jquery.min.js",
                "resources/views/admin-panel/vendor/jquery-easing/jquery.easing.min.js",
                "resources/views/admin-panel/vendor/bootstrap/js/bootstrap.bundle.min.js",
                "resources/views/admin-panel/css/admin.min.css",
                "resources/views/admin-panel/js/admin.min.js",
                "resources/views/admin-panel/js/demo/datatables-demo.js",
            ],
            refresh: true,
        }),
    ],
});
