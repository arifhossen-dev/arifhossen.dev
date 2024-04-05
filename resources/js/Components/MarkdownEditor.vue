<script setup>

import {EditorContent, useEditor} from "@tiptap/vue-3";
import {StarterKit} from "@tiptap/starter-kit";
import {watch} from "vue";

const props = defineProps({
    modelValue:'',
})

const emit = defineEmits(['update:modelValue']);

const editor = useEditor({
    extensions:[
        StarterKit,
    ],
    onUpdate:()=>emit('update:modelValue',editor.value?.getHTML()),
});

watch(()=>props.modelValue,(value)=>{
    if (value === editor.value?.getHTML()){
        return;
    }
     editor.value?.commands.setContent(value)
},{immediate:true})
</script>

<template>
    <EditorContent :editor="editor"/>
</template>

<style scoped>

</style>
