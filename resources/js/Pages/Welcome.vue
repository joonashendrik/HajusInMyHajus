<template>
    <div class="h-90 bg-black text-white">
        cart
    </div>
    <div class="flex">
        <div class="mr-10 ml-8 mt-8 shadow-sm shadow-black w-80 h-300">
            <div class="flex justify-center h-60">
                <img class="h-60" src="https://rukminim2.flixcart.com/image/416/416/k3orqfk0/stool/j/5/m/revolving-stool-for-home-office-stool-shop-stool-hotel-stool-original-imafmrej7dctphsg.jpeg?q=70" alt="">
            </div>
            <div class="flex justify-between">
                Tool 1
                <div>
                    Price = €25
                </div>
            </div>
            <div class="flex">
                <button class="bg-blue-500 rounded justify-right">Add to cart</button>
            </div>
        </div>
         <div class="mr-10 mt-8 shadow-sm shadow-black w-80 h-80">
            <div class="flex justify-center h-60">
                <img class="h-60" src="https://m.media-amazon.com/images/I/61LF39mJsqL._AC_SL1500_.jpg" alt="">
            </div>
            <div class="flex justify-between">
                Tool 2
                <div class="">
                    Price = €30
                </div>
            </div>
            <div class="flex justify-center">
                <button class="bg-blue-500 rounded">Add to cart</button>
            </div>
        </div>
         <div class="mr-10 mt-8 shadow-sm shadow-black w-80 h-80">
            <div class="h-60">
                <img class="w-80 h-60" src="https://www.funrent.ee/wp-content/uploads/2019/04/kandiline-laud.jpg" alt="">
            </div>
            <div class="flex justify-between">
                Laud 1
                <div>
                    Price = €50
                </div>
            </div>
            <div class="flex justify-center">
                <button class="bg-blue-500 rounded">Add to cart</button>
            </div>
        </div>
         <div class="mr-10 mt-8 shadow-sm shadow-black w-80 h-80">
            <div class="h-60">
                <img class="w-80 h-60" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQRF81BZR-ieNPpOp-mgSzY9hzx3qELqN5Ig&usqp=CAU" alt="">
            </div>
            <div class="flex justify-between">
                Laud 2
                <div>
                    Price = €40
                </div>
            </div>
            <div class="flex justify-center">
                <button class="bg-blue-500 rounded">Add to cart</button>
            </div>
        </div>
         <div class="mr-10 mt-8 shadow-sm shadow-black w-80 h-80">
            <div class="flex justify-center h-60">
                <img class="h-60" src="https://www.itshop.ee/media/catalog/product//a/r/arvuti_gaming_vision_rgb_gtx1650s_muudet_itshop_1.jpg" alt="">
            </div>
            <div class="flex justify-between">
                Arvuti 1
                <div>
                    Price = €340
                </div>
            </div>
            <div class="flex justify-center">
                <button class="bg-blue-500 rounded">Add to cart</button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { inject } from '@vue/runtime-core';

const route = inject('route')
defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>
