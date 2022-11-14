import {createApp} from "vue/dist/vue.esm-bundler.js"
import ButtonToggle from "$/Components/ButtonToggle.vue";
import {createPinia, storeToRefs} from "pinia";
import {useLanguageStore} from "$/stores/languageStore";
import SearchBar from "$/Components/SearchBar.vue";

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

const search = createApp(SearchBar)
search.use(pinia)

app.mount('#app')
search.mount('#search')
