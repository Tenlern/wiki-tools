<script setup>
import {ref} from "vue";

name = "ButtonToggle"

const props = defineProps({
    modelValue: {
        type: Boolean,
        default: false,
    }
});

// let key = ref(false);

function switchKey() {
    props.modelValue = !props.modelValue
}

</script>

<template>
    <button class="bg-indigo-50 p-2" @click="switchKey">{{ modelValue ? 'English' : 'Russian' }}</button>
</template>


<style scoped>

</style>
