<template>
  <head title="Weather">
    <!-- <div class="container">{{ weatherData }}</div> -->
  </head>
  <div>
  <!-- {{data}} -->
  </div>
  <div class="flex gap-2 justify-center">
      <p>{{data.name}}</p>
      <p><span class="font-serif">temp:{{data.main.temp}}℃</span></p>
       <p><span class="font-serif">feels like:{{data.main.feels_like}}℃</span></p>
       <p><span class="font-serif">wind speed:{{data.wind.speed}}m/s</span></p>
  </div>
</template>
<script>
export default {
  props: { data: String },
};
</script>
<script setup>
import { Head } from "@inertiajs/inertia-vue3";
</script>

<style scoped>
.container {
  font-size: 20px;
  border: black solid;
}
</style>
