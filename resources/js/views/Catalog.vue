<template>
  <div>
    <div class="container p-3">
      <SearchFa />

      <!-- hhh -->
      <section class="w-full flex md:flex-row flex-col  md:justify-between ">
        <h3 class="flex items-center justify-center unica-font ">
          Results  <span class="text-md text-color"><q>  NAME STORY OR NAME AUTHOR </q> </span>
        </h3>
        <form class="w-full max-w-lg ">
          <div class="flex flex-wrap -mx-3 mb-6"></div>
          <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <div class="relative">
                <select
                  class="block cate appearance-none w-full bg-white border-2 rounded-3xl border-gray-select text-gray-700 py-3 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="grid-state"
                >
                  <option>Categories</option>
                  <option>New Mexico</option>
                  <option>Missouri</option>
                  <option>Texas</option>
                </select>
                <div
                  class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                >
                  <svg
                    class="fill-current h-4 w-4"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <div class="relative">
                <select
                  class="block cate appearance-none w-full bg-white border-2 rounded-3xl border-gray-select text-gray-700 py-3 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="grid-state"
                >
                  <option>Filter by</option>
                  <option>New Mexico</option>
                  <option>Missouri</option>
                  <option>Texas</option>
                </select>
                <div
                  class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                >
                  <svg
                    class="fill-current h-4 w-4"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </form>
      </section>
      <!-- hhh -->

      <div class="border-b-2 mt-10 border-dashed border-gray-botder"></div>
     <section>
          <div class="container p-3">
           <AdvanceStory title="" />
          </div>
    </section>
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
