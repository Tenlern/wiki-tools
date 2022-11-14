<script setup>
import {ref} from "vue";
import {storeToRefs} from "pinia";
import {useTagListStore} from "$/stores/tagListStore";
import {useLanguageStore} from "$/stores/languageStore";

name = "SearchBar"

const languageStore = useLanguageStore()
const { isEng, langKey } = storeToRefs(languageStore)

const tagListStore = useTagListStore()
tagListStore.getTags()

let search = ref('')
let open = ref(false)
// let items = storeToRefs(tagListStore);

</script>

<template>
    <div class="py-2 flex flex-col items-center justify-center relative overflow-hidden sm:py-12">
        <input class="py-3 px-4 w-1/2 rounded shadow font-thin focus:outline-none focus:shadow-lg focus:shadow-slate-200 duration-100 shadow-gray-100"
               @:click="open = !open" type="search" v-model="search" placeholder="Search Here...">

        <ul class="w-1/2"
            v-show="open" @:click="open = !open">
<!--            x-transition:enter="transition ease-out duration-300"-->
<!--            x-transition:enter-start="opacity-0 translate"-->
<!--            x-transition:enter-end="opacity-100 translate"-->
<!--            x-transition:leave="transition ease-in duration-300"-->
<!--            x-transition:leave-start="opacity-100 translate"-->
<!--            x-transition:leave-end="opacity-0 translate" -->
            <template v-for="item in tagListStore.getFilteredTags(search, langKey)" :key="item">
                <li class="w-full text-gray-700 p-4 mt-2 bg-white" :class="[item.bg_color, item.text_color]" v-text="item.name[langKey]"></li>
            </template>
        </ul>

    </div>
</template>

<style scoped>

</style>
