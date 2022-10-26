// import './bootstrap';

// import App from './App.vue'
// import {createApp, createSSRApp} from "vue";

const { createApp } = Vue

const menu = createApp({})
const app = createApp({
    data() {
        return {
            count: 0
        }
    }
})

app.mount('#app')
