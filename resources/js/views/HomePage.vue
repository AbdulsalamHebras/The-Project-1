<template>
  <div>
    <div class="container p-3 mt-6">
      <div class="home flex justify-between justify-items-center">
        <div class="left col-auto flex items-center w-100">
          <div>
            <h3 class="text-6xl text-start">
              What story you wanna read today?
            </h3>
            <p class="text-sm text-start my-4 text-gray-500">
              Explore our catalog and find your next read.
            </p>
            <form action="" class="bg-white pt-3 pb-4 mb-4 mr-20">
              <div class="input">
                <input
                  type="text"
                  class="w-100 shadow appearance-none border-2 rounded-3xl w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  name=""
                  id=""
                  placeholder="Type the keyword..."
                />
                <span class="pl-4"><fa icon="search" /></span>
              </div>
              <button
                class="bg-yellow hover:bg-yellow flex justify-between text-black py-2 mt-6 px-4 rounded"
              >
                Explore
                <span class="pl-4"><fa icon="explosion" /></span>
              </button>
              <i class="fas fa-solid fa-star"></i>
            </form>
          </div>
        </div>
        <div class="right col-auto">
          <div class="shad">
            <img src="../assets/images/home.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <section>
      <div class="container p-3">
        <Stories title="Trendeng Stories" desc="Drop to Explore" />
      </div>
    </section>
    <section>
      <div class="container p-3">
        <Categories />
      </div>
    </section>
    <section>
      <div class="container p-3">
        <AdvanceStory title="Top Adventure Stories" />
      </div>
    </section>
    <section>
      <div class="container p-3">
        <AdvanceStory title="Top History Stories" />
      </div>
    </section>
  </div>
</template>

<script setup>
import AdvanceStory from "../components/AdvanceStory.vue";
import Categories from "../components/Categories.vue";
import Stories from "../components/Stories.vue";
</script>

<style lang="css" scoped>
.left {
  background-image: url("../assets/images/book-gif.png");
  background-repeat: no-repeat;
  background-position: center 20%;
}

@media (max-width: 776px) {
  .container {
    max-width: 640px;
  }
  .home {
    flex-direction: column;
  }
}
form {
  text-align: justify;
}
input {
  box-shadow: 5px 10px 0px 0px #fdbf0f;
}
.shad {
  /* background-color: #3ab8eb;
  padding: 25px 0 0 25px;
  border-radius: 0 20px 0 20px; */
  /* margin-bottom: 20px; */
}
.right img {
  /* box-shadow: -25px -25px 0px 0px #3AB8EB; */
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
