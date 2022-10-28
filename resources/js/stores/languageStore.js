import {acceptHMRUpdate, defineStore} from "pinia";
import {ref} from "vue";

export const useLanguageStore = defineStore('language', () => {
    const language = ref(false);

    function switchLanguage() {
        language.value = !language.value;
    }

    return { language, switchLanguage }
});

// make sure to pass the right store definition, `useAuth` in this case.
if (import.meta.hot) {
    import.meta.hot.accept(acceptHMRUpdate(useLanguageStore, import.meta.hot))
}
