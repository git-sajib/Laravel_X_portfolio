<script setup>
import { Link } from '@inertiajs/vue3';


defineProps({
    project: Object,
})

</script>

<template>
    <Link :href="project.project_url" class="group flex flex-col items-center text-center cursor-pointer" v-motion="{
        initial: {
            y: 100,
            opacity: 0
        },
        enter: {
            y: 0,
            opacity: 1
        }
    }">
    <div class="mb-6">
        <img class="rounded-2xl h-56" :src="project.image" :alt="project.name" />
    </div>
    <span class="group-hover:text-light-tail-500 capitalize text-accent text-sm mb-3">
        {{ project.name }}
    </span>
    <h3 class="group-hover:text-light-tail-500 capitalize text-2xl font-semibold mb-3">
        {{ project.name }}
    </h3>
    </Link>
</template>