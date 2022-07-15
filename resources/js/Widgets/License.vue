<script setup>
const props = defineProps(['data'])

const items = props.data
</script>

<template>
  <div class="p-8">
    <div class="bg-white py-10 px-8 rounded-xl shadow">
      <div class="flex flex-col md:flex-row -m-4">
        <div v-for="item in items" class="flex flex-col justify-between p-4">
          <p class="text-center text-lg" v-html="item.text"></p>
          <img v-if="item.image" class="mx-auto mt-5" :src="item.image" />
        </div>
      </div>
    </div>
  </div>
</template>
