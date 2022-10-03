<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';

defineProps({
    tags: Array
})
</script>

<template>
    <Head title="List of tags" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                List of tags
            </h2>
        </template>

        <div v-for="tag in tags" class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{ tag.name }}
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
