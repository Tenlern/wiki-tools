import {acceptHMRUpdate, defineStore} from "pinia";

export const useGiftStore = defineStore({
    id: 'gift',

    state: () => ({
        isEditMode: false,
        Gift: {}
    }),

    actions: {
        switchEditMode() {
            this.isEditMode = !this.isEditMode;
        },
    }
})

if (import.meta.hot) {
    import.meta.hot.accept(acceptHMRUpdate(useGiftStore, import.meta.hot))
}
