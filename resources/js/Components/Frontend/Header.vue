<script setup>
import { ref, onMounted } from 'vue';
import { useDark, useToggle } from '@vueuse/core';

const isDark = useDark()
const toggleDark = useToggle(isDark)

const showMobileMenu = ref('false');

const scrollBg = ref('false');

const navigations = [
  { name: "Home", href: "#home" },
  { name: "About", href: "#about" },
  { name: "Portfolio", href: "#portfolio" },
  { name: "Services", href: "#services" },
  { name: "Contact", href: "#contact" },
]

const setScrollBg = (value) => {
  scrollBg.value = value;
}

onMounted(() => {
  window.addEventListener('scroll', () => {
    return window.scrollY > 50 ? setScrollBg(true) : setScrollBg(false);
  })
})


</script>

<template>
  <nav class="
            w-full
            fixed
            z-20
            border-gray-200
            px-2
            sm:px-4
            py:2.5
            rounded" :class="{
              'bg-white dark:bg-dark-primary': scrollBg,
              'bg-light-primary  dark:bg-slate-800': !scrollBg,
            }">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 lg:p-1">
      <a href="https://flowbite.com/" class="flex items-center">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
      </a>

      <label class="relative inline-flex items-center mr-5 cursor-pointer m-auto">
        <input @click="toggleDark()" type="checkbox" value="" class="sr-only peer">
        <div
          class="w-11 h-6  bg-teal-500 rounded-full peer dark:bg-gray-700 peer-focus:ring-4  peer-focus:ring-teal-300 dark:peer-focus:ring-teal-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-dark-navy-100">
        </div>
        <span class="ml-3 text-md font-medium text-teal-500  dark:text-dark-navy-100">Light / Dark</span>
      </label>

      <button @click="showMobileMenu = !showMobileMenu" data-collapse-toggle="navbar-default" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="w-full md:block md:w-auto" :class="{ hidden: showMobileMenu }" id="navbar-default" bis_skin_checked="1">
        <ul class="
        flex flex-col 
        p-4 
        mt-4
        rounded-lg
        border border-light-tail-500 dark:border-dark-navy-100
        md:flex-row 
        md:space-x-8 
        md:mt-0 
        md:font-medium
        md:border-0
        ">
          <li v-for="(navigation, index) in navigations" :key="index">
            <a :href="navigation.href" class="
          block 
          py-2 
          pl-3 
          pr-4 
          text-light-tail-500 
          rounded 
          dark:text-dark-navy-100
          hover:text-light-tail-100
          dark:hover:text-white
          " aria-current="page">{{ navigation.name }}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>