<script setup>
import {computed, reactive, ref} from 'vue';
import { ChevronLeftIcon,ChevronRightIcon } from '@heroicons/vue/24/solid'

/**
 * initial values
 * @isActive responsible for active item
 * @interval responsible for delay auto slide between two images
 */
let isActive = ref(0)
const interval = 5000 //milliseconds
const images = reactive([
    {
        thumb:
            "https://images.unsplash.com/photo-1643024658630-a2be4d0c4d37?fit=facearea&facepad=5&w=1024&h=720&q=80",
    },
    {
        thumb:
            "https://images.unsplash.com/photo-1603185030522-05d4497bb180?fit=facearea&facepad=5&w=1024&h=720&q=80",
    },
    {
        thumb:
            "https://images.unsplash.com/photo-1633524384616-ad7f3cc87b75?fit=facearea&facepad=5&w=1024&h=720&q=80",
    },
    {
        thumb:
            "https://images.unsplash.com/photo-1615560480284-64ad1051fc4e?fit=facearea&facepad=5&w=1024&h=720&q=80",
    },
    {
        thumb:
            "https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?fit=facearea&facepad=5&w=1024&h=720&q=80",
    },
    {
        thumb:
            "https://images.unsplash.com/photo-1619271816535-07433c30e8bb?fit=facearea&facepad=5&w=1024&h=720&q=80",
    },
])

const props = defineProps({
    autoPay: {
        type: Boolean,
        default: false,
    },
    maxWidth: {
        type: String,
        default: '2xl',
    },
});

// navigation to Previous image
const prev = () => {
    if (isActive.value === 0) {
        isActive.value = (images.length - 1)
    } else {
        isActive.value -= 1
    }
}

// navigation to Next image
const next = () => {
    if (isActive.value === (images.length - 1)) {
        isActive.value = 0
    } else {
        isActive.value += 1
    }
}

// autoplay
let initAutoPlay = setInterval(() => {
    next()
}, interval)

// to active autoplay on page load
window.onload = () => {
    console.log("window load")
    initAutoPlay
}

// on mouse out autoplay will be restart
const replay = () => {
    if (props.autoPay){
        initAutoPlay = setInterval(() => {
            next()
        }, interval)
    }
}

// on mouse over autoplay will be stopped
const hold = () => {
    clearInterval(initAutoPlay)
}

const maxWidthClass = computed(() => {
    return {
        sm: 'sm:max-w-sm',
        md: 'sm:max-w-md',
        lg: 'sm:max-w-lg',
        xl: 'sm:max-w-xl',
        '2xl': 'sm:max-w-2xl',
        '3xl': 'sm:max-w-2xl',
        '4xl': 'sm:max-w-2xl',
        '5xl': 'sm:max-w-5xl',
        full: 'sm:max-w-full',
    }[props.maxWidth];
});

</script>
<template>
    <section
        class=""
        :class="maxWidthClass"
    >

        <div @mouseover="hold" @mouseout="replay" class="relative w-full">
            <!-- Carousel wrapper -->
            <div class="relative h-[calc(100vh_-_120px)] mb-2 overflow-hidden rounded-2xl bg-slate-200">
                <template v-for="(image, index) in images" :key="index">

                    <Transition name="slide-fade">
                        <div class="duration-700 ease-in-out" v-show="isActive === index">
                            <img
                                :src="image.thumb"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="..."
                            >

<!--                            <div class="">-->
<!--                                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">-->
<!--                                    Boost your conversion rate {{ index }}-->
<!--                                </h3>-->
<!--                            </div>-->
                        </div>
                    </Transition>

                </template>
            </div>

            <!-- Slider indicators -->
            <div class="absolute z-30 flex px-3 py-2 space-x-3 -translate-x-1/2 border rounded-full shadow-md bg-white/50 bottom-5 left-1/2">
                <button
                    v-for="(image, index) in images"
                    :key="index"
                    @click="isActive = index"
                    type="button"
                    class="w-3 h-3 rounded-full" :class="isActive === index ? 'bg-green-400' : 'bg-black'"
                >
                </button>
            </div>

            <!-- Slider controls -->
            <button
                @click="prev"
                type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            >

                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <ChevronLeftIcon class="w-7 h-7 text-white dark:text-gray-800"/>
                    <span class="sr-only">Previous</span>
                </span>

            </button>

            <button
                @click="next"
                type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            >

                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <ChevronRightIcon class="w-7 h-7 text-white dark:text-gray-800"/>
                    <span class="sr-only">Next</span>
                </span>

            </button>

        </div>
    </section>
</template>
<style scoped>
.slide-fade-enter-active {
    transition: all 2s ease-in-out;
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    /* transform: translateY(5px); */
    opacity: 0.1;
}
</style>
