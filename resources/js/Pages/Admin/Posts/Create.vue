<script setup>

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head, Link, useForm} from "@inertiajs/vue3";
import Form from "@/Pages/Admin/Posts/Form.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import TextArea from "@/Components/TextArea.vue";
import MarkdownEditor from "@/Components/MarkdownEditor.vue";

const form = useForm({
    title:'',
    slug:'',
    body:'',
});

const createPost = () => form.post(route('molla.posts.store'));
</script>

<template>
    <Head title="Create Post" />

    <AuthenticatedLayout>

        <template #header>
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Create Post
                    </h2>
                </div>
            </div>

            <form @submit.prevent="createPost" class="mt-6 space-y-6">
                <div>
                    <InputLabel for="title" value="Title" />

                    <TextInput
                        id="title"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.title"
                        required
                        autofocus
                        autocomplete="title"
                    />

<!--                    <InputError class="mt-2" :message="form.errors.name" />-->
                </div>
                <div>
                    <InputLabel for="slug" value="Slug" />

                    <TextInput
                        id="slug"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.slug"
                        required
                        autofocus
                        autocomplete="title"
                    />

<!--                    <InputError class="mt-2" :message="form.errors.name" />-->
                </div>
                <div>
                    <InputLabel for="body" value="Body" />
                    <MarkdownEditor v-model="form.body"/>
                    <TextArea
                        id="body"
                        v-model="form.body"
                        autofocus
                        autocomplete="title"
                    />


<!--                    <InputError class="mt-2" :message="form.errors.name" />-->
                </div>



                <div class="flex items-center gap-4">
                    <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                    <Transition
                        enter-active-class="transition ease-in-out"
                        enter-from-class="opacity-0"
                        leave-active-class="transition ease-in-out"
                        leave-to-class="opacity-0"
                    >
                        <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                    </Transition>
                </div>
            </form>

        </template>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
