import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'               
import { resolve } from 'path'

export default defineConfig({
  resolve: {
    alias: {
      // alias pour utiliser la build avec compilateur
      'vue': 'vue/dist/vue.esm-bundler.js'
    }
  },
  plugins: [
    laravel({
      input: ['resources/js/app.js', 'resources/css/app.css'],
      refresh: true,
    }),
    vue(),                                         
  ],
})