<template>
  <div>
    <section class="details container p-3">
    <div class="grid  grid-cols-1 sm:grid-cols-2 gap-6 ">
      <div class="side-left grid  items-end  col-auto">
        <img src="../assets/images/computer/1.jpg" class="rounded" alt="" />
      </div>
      <div class="side-right grid sm:grid-cols-1 grid-cols-1">
        <div class="flex justify-between items-end ">
          <h3 class="title flex items-center h-10 justify-center unica-font text-lg">STORY TITLE</h3>
          <div class="mark border px-3 py-2  h-10 rounded-xl">
            <!-- <i class="fa-regular fa-bookmark"></i> -->
            <fa class="fa-regular" icon="bookmark" />
            <!-- <font-awesome-icon :icon ="['far', 'bookmark']" /> -->
          </div>
        </div>
        <div class="s">
          <h4 class="auther text-start shdow px-4 py-2 my-4 border-2  border-dashed rounded-xl ">Author (a): Name Author</h4>
          <p class="desc text-start shdow px-4 py-2 mb-4 border-2 border-black border-dashed rounded-xl">
            <span class="text-start">Summary:</span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu
            turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus
            nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum
            tellus elit sed risus. Maecenas eget condimentum velit, sit amet
            feugiat lectus. Class aptent taciti sociosqu a d litora torquent per
            conubia nostra, per inceptos himenaeos.
          </p>
          <div class="flex justify-between my-10 gap-2 ">
          <a href="#" class="px-5 py-1 rounded-3xl border border-black border-solid   bg-yellow w-96"> READ </a>
          <a href="#" class="px-3 py-1 text-center border border-black border-solid  rounded-3xl bg-red-500 w-96">
           FAVORITE
          </a>
        </div>
        </div>
      </div>
    </div>
  </section>
  <section>
          <div class="container p-3">
            <AdvanceStory title="View More" desc="Drop to Explore"  />
          </div>
    </section>
  </div>
</template>

<script  setup>

import AdvanceStory from '../components/AdvanceStory.vue';

</script >

<style lang="css" scoped>
.details img {
  width: 50%;
  margin: 0 auto;
}
.shdow {
     box-shadow: 7px 7px 0px -2px #676767;
}

.details .auther {
border-color: #3D3C3C;
}
</style>

