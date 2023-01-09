<script setup>
import {useLanguageStore} from "$/stores/languageStore";
import {storeToRefs} from "pinia";
import {useGiftStore} from "@/stores/giftStore";

name= "MenuBar"

const languageStore = useLanguageStore()
const { isEng } = storeToRefs(languageStore)
const giftStore = useGiftStore()
const { isEditMode } = storeToRefs(giftStore)

</script>

<template>
    <div class="flex">
        <button @click="languageStore.switchLanguage()" class="p-2 bg-indigo-400 rounded-full">
            {{ isEng ? 'English' : 'Russian' }}
        </button>

        <button @click="giftStore.switchEditMode()" class="p-2 bg-indigo-400 rounded-full">
            {{ isEditMode ? 'Cancel' : 'Edit' }}
        </button>
    </div>
</template>

<style scoped>

</style>
