<template class="max-w-[1200px] mx-auto ">
  <div class="p-8">
    <Navbar />
    <main >
      <router-view> </router-view>
    </main>
    <Footer />
  </div>
</template>

<script setup>
import Navbar from "./Navbar.vue";
import Footer from "./Footer.vue";
</script>

<style lang="scss" scoped>
</style>
