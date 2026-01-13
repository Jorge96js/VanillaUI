import { defineConfig } from 'vite';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
  base: '/',
  server: {
    host: true,
    port: 5173,
    hmr: {
      host: 'localhost',
    },
  },

  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/css/styles.css' , 'resources/js/app.js','resources/js/heladerias.js'],
      refresh: true,
    }),
    tailwindcss(),

    viteStaticCopy({
      targets: [
        { src: 'node_modules/lightbox2/dist/images/*', dest: 'images' }
      ]
    })
  ],

});
