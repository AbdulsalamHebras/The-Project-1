<template>
  <div>
    <div class="category mb-10">
        <div class="flex justify-between my-5">
            <h3 class="text-start ">
             <span class="pl-4"><fa icon="folder-open"/></span>
            Categories
        </h3>
        <div class="more">
           <a href="#" class="py-2 px-4 bg-orange-600 text-white md:rounded-md">
             More
             <span class="pl-4"><fa icon="circle-arrow-right"/></span>
           </a>
        </div>
        <!-- <span><i class="fa-solid fa-circle-arrow-right"></i></span> -->
        </div>
        <div class="box grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-10">
            <h4 class="cate border border-spacing-1 rounded-md py-3 ">
                Adventure
            </h4>
             <h4 class="cate border border-spacing-1 rounded-md py-3">
                History
            </h4>
             <h4 class="cate border border-spacing-1 rounded-md py-3">
                Tragedy
            </h4>
             <h4 class="cate border border-spacing-1 rounded-md py-3">
                Adventure
            </h4>
             <h4 class="cate border border-spacing-1 rounded-md py-3">
                Adventure
            </h4>
             <h4 class="cate border border-spacing-1 rounded-md py-3">
                Adventure
            </h4>
        </div>

    </div>
  </div>
</template>

<script setup>
</script>

<style lang="css" scoped>
.cate {
     box-shadow: 7px 10px 0px 0px #F9784B;
}
</style>
