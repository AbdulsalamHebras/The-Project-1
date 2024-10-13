<template>
  <div>
    <div class="container p-3">
      <div class="border-b-2 border-dashed border-black"></div>
      <div class="footer my-5 flex justify-between">
        <h4>BookStore Project</h4>
        <div class="gap-2 flex">
          <!-- <i class="fa-brands fa-linkedin"></i> -->
          <fa icon="linkedin" class="mx-2" />
         <div class="icon">
            <img src="../assets/images/footer1.png" alt="">
          </div>
          <div class="icon">
            <img src="../assets/images/footer2.png" alt="">
          </div>
           <div class="icon">
            <img src="../assets/images/footer3.png" alt="">
          </div>

          <!-- <font-awesome-icon :icon="['fab', 'linkedin-in']" />
                <font-awesome-icon :icon="['fab', 'linkedin']" /> -->
          <!-- <font-awesome-icon icon="fa-brands fa-linkedin-in" /> -->
          <!-- <i class="fa-brands fa-linkedin"></i> -->
        </div>
        <h4>by eduarda mirelly</h4>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>

<style lang="scss" scoped>
.icon {
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  border-radius: 50%;
  border: 1px solid #676767;
  padding: 12px;
}
</style>
