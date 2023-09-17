<script setup>

</script>

<template>
    <section id="about" class="section bg-light-secondary dark:bg-dark-secondary">
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
            <div class="flex flex-col xl:flex-row gap-24">
                <img class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl"
                    src="http://127.0.0.1:8000/img/hero1.jpg" alt="about" />
                <div class="flex flex-col items-center text-center lg:items-start lg:text-left">
                    <div class="flex flex-col">
                        <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
                            About Me
                        </h2>
                        <p mb-4 text-accent>Freelance Web Deveoper</p>
                        <hr class="mb-8 opacity-90 dark:opacity-5"/>
                        <p class="mb-8">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Numquam ullam itaque ipsum maxime ipsa consequuntur aut laboriosam id, 
                            voluptatum dolore? Incidunt perspiciatis perferendis eligendi 
                            officiis suscipit quidem minus magnam molestiae!<br />
                            <br />
                            voluptatum dolore? Incidunt perspiciatis perferendis eligendi 
                            officiis suscipit quidem minus magnam 
                            molestiae!quidem minus magnam molestiae!
                        </p>
                    </div>
                    <a href="#contact" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Contact me</a>
                </div>
            </div>
        </div>
    </section>
</template>