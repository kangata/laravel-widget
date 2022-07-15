<script setup>
const props = defineProps(['data'])

const title = props.data.title
const description = props.data.description
const image = props.data.image
</script>

<template>
  <div
    class="flex md:h-[300px] select-none"
    :style="`
      background-image: url(${image});
      background-size: 500px;
      background-repeat: no-repeat;
      background-position: right;
    `"
  >
    <div class="md:w-3/5 p-8">
      <h1 class="text-4xl md:text-6xl text-pink-500 font-bold mb-8" v-html="title"></h1>
      <p v-html="description"></p>
    </div>
  </div>
</template>
