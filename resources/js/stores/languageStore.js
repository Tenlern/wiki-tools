import {acceptHMRUpdate, defineStore} from "pinia";
import {ref} from "vue";

export const useLanguageStore = defineStore({
    id: 'language',

    state: () => ({
        isEng: false,
        langKey: 'ru',
    }),

    actions: {
        switchLanguage() {
            this.isEng = !this.isEng;
            this.langKey = this.isEng ? 'en' : 'ru'
        }
    }
});

// make sure to pass the right store definition, `useAuth` in this case.
if (import.meta.hot) {
    import.meta.hot.accept(acceptHMRUpdate(useLanguageStore, import.meta.hot))
}
