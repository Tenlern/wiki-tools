import './bootstrap';

import App from './App.vue'
import {createApp, createSSRApp} from "vue";

const menu = createApp({})
const app = createApp({
    data: () => {
        return {
            test: 'TEST'
        }
    }
})

app.mount('#app')
