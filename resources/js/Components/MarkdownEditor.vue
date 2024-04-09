<script setup>

import {EditorContent, useEditor} from "@tiptap/vue-3";
import {StarterKit} from "@tiptap/starter-kit";
import {watch} from "vue";
import {Markdown} from "tiptap-markdown";
import 'remixicon/fonts/remixicon.css';
import {Underline} from "@tiptap/extension-underline";
import {Heading} from "@tiptap/extension-heading";
import Link from '@tiptap/extension-link';

const props = defineProps({
    modelValue:'',
})

const emit = defineEmits(['update:modelValue']);

const editor = useEditor({
    extensions:[
        StarterKit,
        Markdown,
        Underline,
        Heading.configure({
            levels: [2, 3, 4],
        }),
        Link,
    ],
    editorProps: {
        attributes: {
            class: 'min-h-[300px] prose prose-sm max-w-none py-1.5 px-3',
        },
    },
    onUpdate:()=>emit('update:modelValue',editor.value?.storage.markdown.getMarkdown()),
});

const setLink = () => {
    const previousUrl = editor.value.getAttributes('link').href
    const url = window.prompt('URL', previousUrl)

    // cancelled
    if (url === null) {
        return
    }

    // empty
    if (url === '') {
        editor.value
            .chain()
            .focus()
            .extendMarkRange('link')
            .unsetLink()
            .run()

        return
    }

    // update link
    editor.value
        .chain()
        .focus()
        .extendMarkRange('link')
        .setLink({ href: url })
        .run()
}

watch(()=>props.modelValue,(value)=>{
    if (value === editor.value?.storage.markdown.getMarkdown()){
        return;
    }
     editor.value?.commands.setContent(value)
},{immediate:true})
</script>

<template>
    <div class="border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
        <ul class="flex divide-x border-b">
            <li>
                <button
                    @click="()=>editor.chain().focus().toggleBold().run()"
                    title="Bold"
                    type="button"
                    class="hover:bg-gray-200 first:rounded-tl-md px-2 py-1"
                    :class="{ 'bg-gray-200': editor?.isActive('bold') }"
                >
                    <i class="ri-bold"></i>
                </button>
            </li>
            <li>
                <button
                    @click="()=>editor.chain().focus().toggleItalic().run()"
                    title="Italic"
                    type="button"
                    class="hover:bg-gray-200 px-2 py-1"
                    :class="{ 'bg-gray-200': editor?.isActive('italic') }"
                >
                    <i class="ri-italic"></i>
                </button>
            </li>
            <li>
                <button
                    @click="()=>editor.chain().focus().toggleUnderline().run()"
                    title="Underline"
                    type="button"
                    class="hover:bg-gray-200 px-2 py-1"
                    :class="{ 'bg-gray-200': editor?.isActive('underline') }"
                >
                    <i class="ri-underline"></i>
                </button>
            </li>
            <li>
                <button
                    @click="()=>editor.chain().focus().toggleOrderedList().run()"
                    title="Underline"
                    type="button"
                    class="hover:bg-gray-200 px-2 py-1"
                    :class="{ 'bg-gray-200': editor?.isActive('ordered_list') }"
                >
                    <i class="ri-list-ordered"></i>
                </button>
            </li>
            <li>
                <button
                    @click="()=>editor.chain().focus().toggleBulletList().run()"
                    title="Underline"
                    type="button"
                    class="hover:bg-gray-200 px-2 py-1"
                    :class="{ 'bg-gray-200': editor?.isActive('bullet_list') }"
                >
                    <i class="ri-list-unordered"></i>
                </button>
            </li>
            <li>
                <button
                    @click="()=>editor.chain().focus().toggleHeading({ level: 2 }).run()"
                    title="Underline"
                    type="button"
                    class="hover:bg-gray-200 px-2 py-1"
                    :class="{ 'bg-gray-200': editor?.isActive('heading', { level: 2 }) }"
                >
                    <i class="ri-h-1"></i>
                </button>
            </li>
            <li>
                <button
                    @click="()=>editor.chain().focus().toggleHeading({ level: 3 }).run()"
                    title="Underline"
                    type="button"
                    class="hover:bg-gray-200 px-2 py-1"
                    :class="{ 'bg-gray-200': editor?.isActive('heading', { level: 3 }) }"
                >
                    <i class="ri-h-2"></i>
                </button>
            </li>
            <li>
                <button
                    @click="()=>editor.chain().focus().toggleHeading({level:4}).run()"
                    title="Underline"
                    type="button"
                    class="hover:bg-gray-200 px-2 py-1"
                    :class="{ 'bg-gray-200': editor?.isActive('heading', { level: 4 }) }"
                >
                    <i class="ri-h-3"></i>
                </button>
            </li>
            <li>
                <button
                    @click="setLink"
                    title="Link"
                    type="button"
                    class="hover:bg-gray-200 px-2 py-1"
                    :class="{ 'bg-gray-200': editor?.isActive('link') }"
                >
                    <i class="ri-link"></i>
                </button>
            </li>
        </ul>
        <EditorContent :editor="editor" />
    </div>
</template>

<style scoped>

</style>
