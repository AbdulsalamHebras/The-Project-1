<template>
  <div>
    <div class="m-10">
      <h3 class="unica-font">{{ title }}</h3>
      <div class="flex items-center text-center justify-center gap-2">
          <img src="../assets/images/Sparkle.png" alt="">
      <p class="syne-font text-gray-botder">
        {{ desc }}
      </p>
      </div>


    </div>
    <div
      class="box grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-5 gap-10 px-16 py-10 rounded"
      style="border: 1px dashed #3d3c3c; border-radius: 20px"
    >
      <!-- <div class="story" v-for="storys of story" :key="storys.id">
        <div class="image shdow">
            <h1>{{storys.img}}</h1>
            <h1>{{storys.id}}</h1>
          <img :src="storys.img" class="rounded" :alt="storys.img" />
        </div>
      </div> -->
      <!-- <div class="story">
        <div class="image shdow">
          <img :src="'/images/computer/1.jpg'" class="rounded" alt="" />
        </div>
      </div> -->
       <div class="story">
        <div class="image shdow">
          <img src="../assets/images/computer/1.jpg" class="rounded h-60 w-full" alt="" />
        </div>
      </div>
      <div class="story">
        <div class="image shdow">
          <img src="../assets/images/computer/2.jpg" class="rounded h-60 w-full" alt="" />
        </div>
      </div>
      <div class="story">
        <div class="image shdow">
          <img src="../assets/images/computer/3.jpg" class="rounded h-60 w-full" alt="" />
        </div>
      </div>
      <div class="story">
        <div class="image shdow">
          <img src="../assets/images/computer/4.jpg"   class="rounded h-60 w-full" alt="" />
        </div>
      </div>
       <div class="story">
        <div class="image shdow">
          <img src="../assets/images/computer/5.jpg"   class="rounded h-60 w-full" alt="" />
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>

import { ref } from 'vue';
const props = defineProps({
  title: String,
  desc: String,
});

const story = ref([
    {
        id:1,
        img:'../assets/images/computer/1.png',
    },
    {
        id:2,
        img:'../assets/images/computer/2.png',
    },
    {
        id:3,
        img:'../assets/images/computer/3.png',
    },
    {
        id:4,
        img:'../assets/images/computer/4.png',
    },
    {
        id:5,
        img:'../assets/images/computer/5.png',
    },
]);
</script>

<style lang="scss" scoped>
.shdow {
  box-shadow: 10px 12px 10px -6px rgba(61, 60, 60, 0.3607843137);
}
</style>
