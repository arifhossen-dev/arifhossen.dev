<script setup>
</script>

<template>
    <div class="bg-blue-50 text-black/50 dark:bg-black dark:text-white/50">
        <img
            id="background"
            class="absolute -left-20 top-0 max-w-[877px]"
            src="https://laravel.com/assets/img/welcome/background.svg"
        />
        <div
            class="relative min-h-screen flex flex-col items-center selection:bg-[#FF2D20] selection:text-white"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">

                    </div>
                </header>

                <main class="my-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <slot/>
                    </div>
                </main>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
