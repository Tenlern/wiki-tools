<script setup>
import {ref} from "vue";
import {storeToRefs} from "pinia";
import {useLanguageStore} from "@/stores/languageStore";

name = "ButtonToggle"

const languageStore = useLanguageStore();
const { isEng } = storeToRefs(languageStore)

</script>

<template>
    <button class="bg-indigo-50 p-2" @click="languageStore.switchLanguage()">{{ isEng ? 'English' : 'Russian' }}</button>
</template>


<style scoped>

</style>
