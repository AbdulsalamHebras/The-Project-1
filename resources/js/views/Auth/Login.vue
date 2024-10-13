<template >
  <div>
    <main class="max-w-[1200px] mx-auto p-6 sm:w-1/3  h-96">

        <div class="font-bold text-xl mx-auto border-b-2 border-black w-fit mb-4">login</div>
      <form class="w-full">
        <div class="mb-6 mx-auto">
          <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
            <label
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
              for="grid-first-name"
            >
              Email
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
              id="grid-first-name"
              type="email"
              placeholder="Enter Email Address"
            />
            <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
          </div>
          <div class="w-full flex-wrap md:w-1/1 px-3">
            <label
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
              for="grid-password"
            >
              Password
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-password"
              type="password"
              placeholder="******************"
            />
            <p class="text-gray-600 text-xs italic">
              Make it as long and as crazy as you'd like
            </p>
          </div>
        </div>
        <!-- <div class="md:flex md:items-center">
          <div class="w-1/1 mx-auto mt-5">
            <button
              class="shadow bg-yellow focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
              type="button"
            >
              Sign In
            </button>
          </div>
        </div> -->
        <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Sign In
      </button>
      <div class="inline-block align-baseline font-bold text-sm">
        Dont Have an account
        <router-link :to="{name:'Register'}" class="text-blue-500 hover:text-blue-800">
            Register?
        </router-link>
      </div>
    </div>
      </form>
    </main>
  </div>
</template>

<script setup>
</script>

<style lang="scss" scoped>
</style>
