<script setup>

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
</script>

<template>
    <Head title="Posts Details" />

    <AuthenticatedLayout>

        <template #header>
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Post Details</h2>
                </div>
            </div>

        </template>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
