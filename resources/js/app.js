import './bootstrap';

import Alpine from 'alpinejs';
import App from './App.vue'
import {createApp} from "vue";

window.Alpine = Alpine;

Alpine.start();

createApp(App).mount('#app')
