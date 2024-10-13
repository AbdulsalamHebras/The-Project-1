<template>
    <div>
        <section class="w-full justify-center">
        <form action="" class="bg-white pt-3 pb-4 mb-4 w-full sm:w-1/2 mx-auto">
          <div class="input">
            <input
              type="text"
              class="w-100 shadow appearance-none border rounded-3xl w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              name=""
              id=""
              placeholder="Type the name of book or author"
            />
            <span class="pl-4"><fa icon="search" /></span>
          </div>
        </form>
      </section>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>
input {
  box-shadow: 5px 10px 0px 0px #fdbf0f;
}
input::placeholder {
  font-size: 14px;
}
.input {
  position: relative;
}
.input span {
  position: absolute;
  right: 4%;
  display: flex;
  top: 29%;
  align-items: center;
}
</style>
