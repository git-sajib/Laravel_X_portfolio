<script setup>
import Projects from './Projects.vue';
defineProps({
    skills: Object,
    projects: Object,
})

</script>

<template>
    <section id="portfolio" class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]">
        <div class="container mx-auto" v-motion="{
            initial: {
                y: 100,
                opacity: 0
            },
            visible: {
                y: 0,
                opacity: 1
            }
        }">
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My latest work</h2>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nostrum magni a, labore laudantium
                    consequuntur
                    quibusdam culpa. In auctoribus, voluptatem.
                </p>
            </div>
        </div>
        <Projects :skills="skills" :projects="projects" />
    </section>
</template>