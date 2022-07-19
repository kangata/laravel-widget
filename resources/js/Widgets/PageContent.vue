<script setup>
const props = defineProps(['data'])

const content = props.data.content
</script>

<template>
  <div class="p-8" v-html="content"></div>
</template>
