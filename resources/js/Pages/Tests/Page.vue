<script setup>
import { defineAsyncComponent } from 'vue'

const props = defineProps({
  'page': Object
})

const widgets = props.page.widgets.map((widget) => {
  return Object.assign({
    component: defineAsyncComponent(() => import(`../../Widgets/${widget.file}.vue`)),
  }, widget)
})
</script>

<template>
  <div class="min-h-screen bg-gray-100">
    <template v-for="widget in widgets">
      <Component :is="widget.component" :data="widget.data" />
    </template>
  </div>
</template>
