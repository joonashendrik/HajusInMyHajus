<template>
  <head title="Weather">
    <!-- <div class="container">{{ weatherData }}</div> -->
  </head>
  <div>
  {{data}}
)))____
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
