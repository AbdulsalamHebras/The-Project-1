<template>
  <div>
    <div class="my-10">
      <div class="flex">
        <img
          src="../assets/images/PATH.SVG"
          style="width: 20px"
          class="mr-2"
          alt=""
        />
        <h3 class="unica-font text-start">{{ title }}</h3>
      </div>
      <!-- <p>{{ desc }}</p> -->
    </div>
    <div
      class="box grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-5 gap-10 rounded"
    >
      <div class="story">
        <div class="image">
          <img src="../assets/images/computer/1.jpg" class="rounded" alt="" />
        </div>
        <div class="flex justify-between my-3 gap-2">
          <!-- <a href="#" class="px-5 py-1 rounded-3xl text-white bg-yellow w-96"> Read </a> -->
          <router-link
            :to="{ name: 'detailsStory', params: { id: 1 } }"
            class="px-5 py-1 border-2 unica-font border-solid border-black text-black rounded-3xl bg-yellow w-96"
          >
            Read
          </router-link>
          <a
            href="#"
            class="px-3 py-1 text-center text-white rounded-3xl bg-green-400 w-72"
          >
            <span><fa icon="download" /></span>
          </a>
        </div>
      </div>
      <div class="story">
        <div class="image">
          <img src="../assets/images/computer/1.jpg" class="rounded" alt="" />
        </div>
        <div class="flex justify-between my-3 gap-2">
          <router-link
            :to="{ name: 'detailsStory', params: { id: 1 } }"
            class="px-5 py-1 border-2 unica-font border-solid border-black text-black rounded-3xl bg-yellow w-96"
          >
            Read
          </router-link>
          <a
            href="#"
            class="px-3 py-1 text-center text-white rounded-3xl bg-green-400 w-72"
          >
            <span><fa icon="download" /></span>
          </a>
        </div>
      </div>
      <div class="story">
        <div class="image">
          <img src="../assets/images/computer/1.jpg" class="rounded" alt="" />
        </div>
        <div class="flex justify-between my-3 gap-2">
          <router-link
            :to="{ name: 'detailsStory', params: { id: 1 } }"
            class="px-5 py-1 border-2 unica-font border-solid border-black text-black rounded-3xl bg-yellow w-96"
          >
            Read
          </router-link>
          <a
            href="#"
            class="px-3 py-1 text-center text-white rounded-3xl bg-green-400 w-72"
          >
            <span><fa icon="download" /></span>
          </a>
        </div>
      </div>
      <div class="story">
        <div class="image">
          <img src="../assets/images/computer/1.jpg" class="rounded" alt="" />
        </div>
        <div class="flex justify-between my-3 gap-2">
          <router-link
            :to="{ name: 'detailsStory', params: { id: 1 } }"
            class="px-5 py-1 border-2 unica-font border-solid border-black text-black rounded-3xl bg-yellow w-96"
          >
            Read
          </router-link>
          <a
            href="#"
            class="px-3 py-1 text-center text-white rounded-3xl bg-green-400 w-72"
          >
            <span><fa icon="download" /></span>
          </a>
        </div>
      </div>
      <div class="story">
        <div class="image">
          <img src="../assets/images/computer/1.jpg" class="rounded" alt="" />
        </div>
        <div class="flex justify-between my-3 gap-2">
          <router-link
            :to="{ name: 'detailsStory', params: { id: 1 } }"
            class="px-5 py-1 border-2 unica-font border-solid border-black text-black rounded-3xl bg-yellow w-96"
          >
            Read
          </router-link>
          <a
            href="#"
            class="px-3 py-1 text-center text-white rounded-3xl bg-green-400 w-72"
          >
            <span><fa icon="download" /></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  title: String,
  desc: String,
});
</script>

<style lang="scss" scoped>
</style>
