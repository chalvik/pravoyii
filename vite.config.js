// vite.config.js in your project root directory
import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
    // Public base path for assets
    base: '/dist/',
    build: {
        // Output directory for the built files (relative to project root)
        outDir: resolve(__dirname, 'web/dist'),
        emptyOutDir: true, // Clean the outDir before build
        manifest: true, // Generate a manifest file for Yii2 to read
        rollupOptions: {
            input: {
                // Define your entry points for frontend and backend
                frontend: resolve(__dirname, 'frontend/web/js/main.js'),
                backend: resolve(__dirname, 'backend/web/js/main.js'),
                // Add CSS entry points if needed
                // frontend_css: resolve(__dirname, 'frontend/web/css/site.css'),
            },
        },
    },
    server: {
        // Ensure the dev server runs on the port configured in the Yii2 component
        port: 5173,
        // Optional: proxy your Yii2 application for seamless routing (adjust to your local setup)
        // proxy: {
        //     '/': 'http://localhost:80'
        // }
    },
});
