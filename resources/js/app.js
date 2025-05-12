import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue';
import App from './App.vue';

const app = createApp(App);

app.mount('#app');