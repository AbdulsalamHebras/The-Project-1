<template>
  <div>
    <TransitionRoot as="template" :show="open">
      <Dialog class="relative z-10" @close="open = false">
        <TransitionChild
          as="template"
          enter="ease-in-out duration-500"
          enter-from="opacity-0"
          enter-to="opacity-100"
          leave="ease-in-out duration-500"
          leave-from="opacity-100"
          leave-to="opacity-0"
        >
          <div
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
          />
        </TransitionChild>

        <div class="fixed inset-0 overflow-hidden">
          <div class="absolute inset-0 overflow-hidden">
            <div
              class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10"
            >
              <TransitionChild
                as="template"
                enter="transform transition ease-in-out duration-500 sm:duration-700"
                enter-from="translate-x-full"
                enter-to="translate-x-0"
                leave="transform transition ease-in-out duration-500 sm:duration-700"
                leave-from="translate-x-0"
                leave-to="translate-x-full"
              >
                <DialogPanel
                  class="pointer-events-auto relative w-screen max-w-md"
                >
                  <TransitionChild
                    as="template"
                    enter="ease-in-out duration-500"
                    enter-from="opacity-0"
                    enter-to="opacity-100"
                    leave="ease-in-out duration-500"
                    leave-from="opacity-100"
                    leave-to="opacity-0"
                  >
                    <div
                      class="absolute left-0 top-0 -ml-8 flex pr-2 pt-4 sm:-ml-10 sm:pr-4"
                    >
                      <button
                        type="button"
                        class="relative rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                        @click="open = false"
                      >
                        <span class="absolute -inset-2.5" />
                        <span class="sr-only">Close panel</span>
                        <span><fa icon="xmark" class="h-5 w-6 p-1" /></span>
                        <!-- <XMarkIcon class="h-6 w-6" aria-hidden="true" /> -->
                      </button>
                    </div>
                  </TransitionChild>
                  <div
                    class="flex h-full flex-col overflow-y-scroll bg-white py-6 shadow-xl"
                  >
                    <div class="px-4 sm:px-6">
                      <DialogTitle
                        class="text-base font-semibold leading-6 text-gray-900"
                        >Panel title</DialogTitle
                      >
                      <!--  -->
                      <h3 class="my-5">
                        Your Fav <span class="syne-font items">(02 items)</span>
                      </h3>
                      <div
                        class="favorate border-2 rounded-xl border-dashed border-gray-500 mb-2"
                      >
                        <div class="grid grid-cols-3 p-5">
                          <div class="image">
                            <img
                              src="../assets/images/computer/12.jpg"
                              alt=""
                            />
                          </div>
                          <div
                            class="content flex content-between py-2 flex-wrap"
                          >
                            <div class="flex flex-col">
                              <h2 class="pl-3">Story Name...</h2>
                              <h4 class="pl-3 text-sm">Author name...</h4>
                            </div>
                            <div class="read ml-3 border-2 px-2 rounded-md">
                              <a href="#"> Read </a>
                            </div>
                          </div>
                          <div class="pl-5 flex items-end justify-end">
                            <!-- <i class="fa-regular fa-trash-can"></i> -->
                            <fa icon="trash-can" />
                          </div>
                        </div>
                      </div>
                      <div
                        class="favorate border-2 rounded-xl border-dashed border-gray-500 mb-2"
                      >
                        <div class="grid grid-cols-3 p-5">
                          <div class="image">
                            <img
                              src="../assets/images/computer/12.jpg"
                              alt=""
                            />
                          </div>
                          <div
                            class="content flex content-between py-2 flex-wrap"
                          >
                            <div class="flex flex-col">
                              <h2 class="pl-3">Story Name...</h2>
                              <h4 class="pl-3 text-sm">Author name...</h4>
                            </div>
                            <div class="read ml-3 border-2 px-2 rounded-md">
                              <a href="#"> Read </a>
                            </div>
                          </div>
                          <div class="pl-5 flex items-end justify-end">
                            <!-- <i class="fa-regular fa-trash-can"></i> -->
                            <fa icon="trash-can" />
                          </div>
                        </div>
                      </div>
                      <!--  -->
                    </div>
                    <div class="relative mt-6 flex-1 px-4 sm:px-6">
                      <!-- Your content -->
                    </div>
                  </div>
                </DialogPanel>
              </TransitionChild>
            </div>
          </div>
        </div>
      </Dialog>
    </TransitionRoot>
    <section class="text-end">
      <!-- <TransitionRoot :show="close"> -->
      <button
        type="button"
        class="relative close rounded-md text-gray-300 transition-transform focus:outline-none focus:ring-2 focus:ring-white"
        @click="open = true"
      >
        <span class="absolute -inset-2.5" />
        <span class="sr-only">Close panel</span>
        <!-- <XMarkIcon class="h-6 w-6" aria-hidden="true" /> -->
        <!-- <span ><fa icon="bars" /></span> -->
        <span><fa icon="bars" class="h-6 w-6 p-1" /></span>
      </button>
      <!-- </TransitionRoot> -->
    </section>
    <div class="container p-3">

        <SearchFa />

        <SelectFilter />
      <div class="border-b-2 mt-10 border-dashed border-gray-botder"></div>
      <div class="imgage">
        <img src="../assets/images/BookOpen.png" class="mx-auto" alt="" />
      </div>
      <h3 class="text-li-red text-2xl">Favorite some book :)</h3>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
import {
  Dialog,
  DialogPanel,
  DialogTitle,
  TransitionChild,
  TransitionRoot,
} from "@headlessui/vue";
import { XMarkIcon } from "@heroicons/vue/24/outline";
import SearchFa from "../components/SearchFa.vue";
import SelectFilter from "../components/SelectFilter.vue";

const open = ref(true);
</script>
<style lang="css" scoped>
.close {
  text-align: end;
  font-size: 18px;
  padding: 5px 12px;
  margin: 10px;
}

.items {
  color: #3ab8eb;
}
.read {
  color: #3d3c3c;
  border-color: #3d3c3c;
}

</style>
<!-- https://vuetifyjs.com/en/components/navigation-drawers/#bottom-drawer -->
