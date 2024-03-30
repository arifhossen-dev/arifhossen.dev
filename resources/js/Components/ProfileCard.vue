<script setup>

import {Link} from "@inertiajs/vue3";
</script>

<template>
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
                :class="$page.component ==='Home'?'bg-blue-100':'bg-white hover:bg-blue-50'"
            >
                Home
            </Link>
            <Link
                :href="route('portfolio')"
                class="rounded-md hover:bg-blue-50 px-3 py-2 text-black dark:text-white dark:hover:text-white/80"
                :class="$page.component ==='Portfolio'?'bg-blue-100':'bg-white hover:bg-blue-50'"
            >
                Portfolio
            </Link>

            <Link
                :href="route('about')"
                class="rounded-md px-3 py-2 text-black dark:text-white dark:hover:text-white/80"
                :class="$page.component ==='About'?'bg-blue-100':'bg-white hover:bg-blue-50'"
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
</template>

<style scoped>

</style>
