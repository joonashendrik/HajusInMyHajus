<template>
  <div class="lg:w-7/12 w-full h-96">
    <div class="h-full w-full" id="map" ref="map"></div>
    <form @submit="submitForm">
       <input type="text" v-model="form.name" />
      <input type="text" v-model="form.description" />
      <input type="text" v-model="form.lat" />
      <input type="text" v-model="form.lng" />
      <input type="submit" class="btn" value="Add marker" />
    </form>
    <table>
         <tr>
        <th>Name</th>
        <th>Description</th>
        <th>latitude</th>
        <th>longitude</th>
      </tr>
      <tr v-for="item in data" :key="item.id">
        <td>{{ item.name }}</td>
        <td>{{ item.description }}</td>
        <td>{{ item.latitude }}</td>
        <td>{{ item.latitude }}</td>
      </tr>

    </table>
    <!-- <ul>
        <li v-for="item in data": key="item.id">
            {{item.name}} - {{item.description}} {{item.latidute}} {{item.longitude}}
        </li>
    </ul> -->
  </div>
</template>
<script>
export default {
    props: { data: JSON },
};
</script>
<script setup>
// console.log(this);
import { Head, useForm } from "@inertiajs/inertia-vue3";
import { Loader } from "@googlemaps/js-api-loader";
import { inject, ref } from "vue";
import { defineProps, reactive } from "vue";

const route = inject("route");
const props = defineProps({
  data: String,
});
let map = ref(null);

const loader = new Loader({
  apiKey: "",
  version: "weekly",
});

const form = useForm({
  lat: "",
  lng: "",
  name: "",
  description: "",
});
const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
let labelIndex = 0;

loader.load().then(() => {
  let myLatLng = { lat: 58.24806, lng: 22.50389 };
  map = new google.maps.Map(map.value, {
    zoom: 8,
    center: myLatLng,
  });

  for (const key in props.data) {
    let markers = new google.maps.Marker({
      position: {
        lat: parseInt(props.data[key].latitude),
        lng: parseInt(props.data[key].longitude),
      },
      title: props.data[key].name,
      map,
    });
  }

  new google.maps.Marker({
    position: myLatLng,
    map,
    title: "Hello World!",
  });

  let marker2 = "";
  google.maps.event.addListener(map, "click", (event) => {
    // map.setCenter(marker.getPosition());'
    const cord = event.latLng.toJSON();
    form.lng = cord.lng;
    form.lat = cord.lat;
    addMarker(event.latLng, map);
    //console.log("?");
    form.post("/Map");
  });
});
function addMarker(location, map) {
  let newMarker = new google.maps.Marker({
    position: location,
    label: labels[labelIndex++ % labels.length],
    map: map,
  });
}
</script>
