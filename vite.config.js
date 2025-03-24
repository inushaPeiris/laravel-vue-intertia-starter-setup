import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  plugins: [
        laravel({
            input: ['resources/js/app.js'], // Entry file for Vite
            refresh: true,
        }),
        vue(),
        tailwindcss(),
    ],
  build: {
    outDir: 'public/build',  // This specifies the output directory for Vite build files
    manifest: true,          // Make sure the manifest file is generated
  },
});
