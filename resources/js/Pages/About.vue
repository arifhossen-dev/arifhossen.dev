<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ProfileCard from "@/Components/ProfileCard.vue";
import LandingLayout from "@/Layouts/LandingLayout.vue";
const props = defineProps(['posts'])
</script>

<template>
    <Head title="Welcome" />
    <LandingLayout>
            <ProfileCard/>

            <div
                class="flex md:row-span-2 items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)]"
            >
                <div class="">
                    <h2 class="text-xl font-semibold text-black dark:text-white">About Arif Hossen</h2>

                    <p class="mt-4 text-sm/relaxed">
                        Hey! Nice to see you.

                        I am a Full Stack Developer with a huge love for Alpine.js, Vue.js, React.js, Laravel, Headless Tech, Everything API, RDBMS, WordPress, TailwindCSS and System Architecture. Currently, I'm open to work and employment opportunities.

                        I am the co-founder of HappyAddons, one of the most popular and adored Elementor Addons Libraries. I Actively code on WordPress themes and plugins, Laravel, Shell Scripts, and APIs (in-house, end user products, and consumers) every day.

                        I love to read books and listen to music.

                        🎆 I was the lead organizer of WordCamp Dhaka 2019. I have arranged and took sessions in numbers of local WordPress, PHP and JavaScript meetups, seminars and conferences.
                        🔭 I’m currently creating two courses on Alpine.js and WordPress security, and Eazy Plugin Manager for helping WordPress administrators to manage plugins with so many cool features like never before.
                        🌱 I’m currently learning many things, I believe that everyday is a learning opportunity.
                        👯 I’m currently open for work and employment opportunities (remote and relocation)
                        💬 Ask me about Vue.js, React.js, Alpine.js, PHP, WordPress, Laravel and API development.
                        📫 I am just one mail away - [hasin at hasinhayder dot com]
                        😄 Pronouns: He, Fat & Happy 😄
                        🥳 Fun fact: I love to cook, I love to sing, I love to travel on my motorcycle.
                        📖 My books - I have written four books, "Object Oriented Programming with PHP", "WordPress Complete", "Facebook App Development" and "Smarty"
                        🔧 Tools - VSCode, Insomnia, Beekeper Studio, Markdown Editors, Spotify, Local by Flywheel, Docker and the Mighty Terminal with Oh MyZSH and PowerLevel 10K on Mac and Linux (Zorin OS).
                        📩 I run a weekly newsletter service for the developers, Developers Treasure Chest where you will find a curated list of awesome resources.
                        👥 I actively manage a few popular Facebok groups - WordPressians, Talk.js, phpXperts, Laravel Bangladesh, and ReactJS Bangladesh

                    </p>
                </div>
            </div>
    </LandingLayout>
</template>
