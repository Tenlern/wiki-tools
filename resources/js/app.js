import {createApp} from "vue/dist/vue.esm-bundler.js"
import ButtonToggle from "$/Components/ButtonToggle.vue";
import {createPinia, storeToRefs} from "pinia";
import {useLanguageStore} from "$/stores/languageStore";


const pinia = createPinia()

const app = createApp({
    setup() {
        const languageStore = useLanguageStore()
        const {isEng} = storeToRefs(languageStore)

        return {isEng}
    }
})
app.use(pinia)
app.component('ButtonToggle', ButtonToggle)

app.mount('#app')
