<template>
  <div>
    <div class="container p-3">
      <SearchFa />
       <SelectFilter />
     

      <div class="border-b-2 mt-10 border-dashed border-gray-botder"></div>
        <div class="flex justify-center items-center gap-4 mt-40">
        <div class="imgage">
          <img src="../assets/images/BookOpen.png" class="mx-auto" alt="" />
        </div>
        <h3 class="text-li-red text-2xl">Favorite some book :)</h3>
      </div>
    </div>
  </div>
</template>

<script setup>
import AdvanceStory from "../components/AdvanceStory.vue";
import SearchFa from "../components/SearchFa.vue";
import SelectFilter from "../components/SelectFilter.vue";
import Stories from "../components/Stories.vue";
</script>

<style lang="scss" scoped>
.text-color {
    color: #3AB8EB;
}
</style>
