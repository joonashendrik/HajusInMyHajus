<template>
  <Head title="E-pood" />
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
      <div class="bg-white overflow-hidden shadow-sm rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="grid grid-cols-4 gap-4" >
          <div v-for="item in items">
                <div class="rounded overflow-hidden shadow-lg">
                <img class="w-full" :src="'https://epood.ta19heinsoo.itmajakas.ee/' + item.image" alt="">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{item.title}}</div>
                    <p class="text-gray-700 text-base">
                    {{item.description}}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                 <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{item.category}}</span>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Price: {{item.price}}</span>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buy</button>
                </div>
                </div>
          </div>
          </div>
        </div>
      </div>
    </div>
</template>
<script>
export default {
    props:{data: JSON},
  data(){
      return{
          items: null,
      }
  },
  created(){
          axios.get("https://epood.ta19heinsoo.itmajakas.ee/api/hajus")
              .then(response => this.items = response.data)
      }
};
// export default { layoutName: "Authenticated" };
</script>
<script setup>
import { Head} from "@inertiajs/inertia-vue3";
import axios from 'axios'
import { inject, ref} from "vue";
</script>
<style scoped>
</style>
