import {createApp} from "vue/dist/vue.esm-bundler.js"
import ButtonToggle from "$/Components/ButtonToggle.vue";

const app = createApp({})
app.data =
app.component('ButtonToggle', ButtonToggle)

app.mount('#app')
