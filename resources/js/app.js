import {createApp} from "vue/dist/vue.esm-bundler.js"
import ButtonToggle from "$/Components/ButtonToggle.vue";
import {ref} from "vue";

const app = createApp({
    setup() {
        const isEng = ref(false)

        return {isEng}
    }
})
app.component('ButtonToggle', ButtonToggle)

app.mount('#app')
