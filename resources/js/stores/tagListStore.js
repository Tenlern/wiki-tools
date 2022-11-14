import {acceptHMRUpdate, defineStore} from "pinia";
import {ref} from "vue";
import axios from "axios";

export const useTagListStore = defineStore({
    id: 'tags',

    state: () => ({
        tags: [
            // 'Bitcoin', 'Ethereum', 'Siacoin'
        ]
    }),

    actions: {
        async getTags() {
            await axios.get('/api/tags')
                .then((response) => {
                    this.tags = response.data
                })
        },
        getFilteredTags(search, langKey) {
            return this.tags.filter(
                i => i.name[langKey].toLowerCase().startsWith(search.toLowerCase())
            )
        }
    }
});

// make sure to pass the right store definition, `useAuth` in this case.
if (import.meta.hot) {
    import.meta.hot.accept(acceptHMRUpdate(useTagListStore, import.meta.hot))
}
