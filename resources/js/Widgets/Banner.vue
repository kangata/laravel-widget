<script setup>
const props = defineProps(['data'])

const title = props.data.title
const description = props.data.description
const image = props.data.image
const url = props.data.url
</script>

<template>
  <div class="flex flex-col md:flex-row select-none">
    <div class="md:w-1/2 p-8">
      <h1 class="text-4xl md:text-6xl text-blue-500 font-black mb-8">{{ title }}</h1>
      <p>{{ description }}</p>
      <div v-if="url" class="my-10">
        <a class="bg-blue-500 py-3 px-8 rounded-full text-white font-bold" :href="url">Get Started</a>
      </div>
    </div>
    <div class="md:w-1/2 p-8">
      <img :src="image" />
    </div>
  </div>
</template>
