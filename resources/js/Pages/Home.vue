<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Pagination from "@/Components/Pagination.vue";
const props = defineProps(['posts'])
</script>

<template>
    <Head title="Welcome" />
    <div class="bg-blue-50 text-black/50 dark:bg-black dark:text-white/50">
        <img
            id="background"
            class="absolute -left-20 top-0 max-w-[877px]"
            src="https://laravel.com/assets/img/welcome/background.svg"
        />
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">

                    </div>
                </header>

                <main class="my-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <div
                            id="docs-card"
                            class="
                                flex
                                gap-6
                                overflow-hidden
                                rounded-lg
                                bg-white
                                p-6
                                shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)]
                                md:row-span-2
                                lg:p-10
                                lg:pb-10
                                dark:bg-zinc-900
                                dark:ring-zinc-800
                            "
                        >
                            <div class="w-full">
                                <div class="relative flex flex-col space-x-3 gap-3 rounded-lg border border-blue-100 bg-white shadow-sm">
                                    <div class="flex-shrink-0">
                                        <img class="w-full rounded-tl-lg rounded-tr-lg" src="/images/Square_Arif_Hossen_Laravel_developer-02.jpeg" alt="">
                                    </div>
                                    <div class="min-w-0 flex-1 mb-2">
                                        <a href="#" class="focus:outline-none">
                                            <p class="text-3xl font-extrabold text-gray-900">Arif Hossen</p>
                                            <p class="font-extrabold text-gray-500">Laravel <span class="text-gray-300 text-xl">/</span> PHP <span class="text-gray-300 text-xl">/</span> Vue <span class="text-gray-300 text-xl">/</span> Alpine <span class="text-gray-300 text-xl">/</span> Livewire <span class="text-gray-300 text-xl">/</span> Filament</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <nav class="flex flex-col items-end">
                                <Link
                                    :href="route('home')"
                                    class="rounded-md px-3 py-2 text-black dark:text-white dark:hover:text-white/80"
                                    :class="true?'bg-blue-100':'bg-white hover:bg-blue-50'"
                                >
                                    Home
                                </Link>
                                <Link
                                    href=""
                                    class="rounded-md hover:bg-blue-50 px-3 py-2 text-black dark:text-white dark:hover:text-white/80"
                                >
                                    Portfolio
                                </Link>

                                <Link
                                    href=""
                                    class="rounded-md px-3 py-2 text-black dark:text-white dark:hover:text-white/80"
                                >
                                    About
                                </Link>

                                <Link
                                    href=""
                                    class="rounded-md px-3 py-2 text-black dark:text-white dark:hover:text-white/80"
                                >
                                    Search
                                </Link>
                            </nav>
                        </div>


                        <template v-for="post in posts.data">

                        <a
                            :href="route('post.show', post)"
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            :class="post.id === 1?'md:row-span-2':''"
                        >
                            <div
                                v-if="post.id == 1"
                                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16"
                            >
                                <svg
                                    class="size-5 sm:size-6"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <g fill="#FF2D20">
                                        <path
                                            d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z"
                                        />
                                    </g>
                                </svg>
                            </div>

                            <div class="">
                                <h2 class="text-xl font-semibold text-black dark:text-white">{{post.title}}</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    {{post.body??post.short_body}}
                                </p>
                            </div>
                        </a>

                        </template>

                        <div class="col-span-2">
                            <div>
                                <Pagination :meta="posts.meta"/>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>
    </div>
</template>
