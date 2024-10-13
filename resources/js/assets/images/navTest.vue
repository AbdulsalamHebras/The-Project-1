<template>
  <div class="navbar flex bg-white h-16 py-2 px-6 shadow justify-between ">

    <div class="logo inline-flex items-center" style="min-width: 100px;">
      <img src="../images/Header.png" alt="" />
    </div>

    <ul class="links flex  shadow-sm">
      <li class=" inline-flex items-center ">
        <router-link to=""> Home </router-link>
      </li>
      <li class=" inline-flex items-center ">
        <router-link to=""> Categories </router-link>
      </li>
      <li class=" inline-flex items-center ">
        <router-link to=""> Author </router-link>
      </li>
      <li class=" inline-flex items-center ">
        <router-link to=""> Logon </router-link>
      </li>
      <li class=" inline-flex items-center ">
        <router-link to=""> Register </router-link>
      </li>
    </ul>

  </div>
</template>

<script setup>
</script>

<style lang="css" scoped>
.navbar {
position: relative;
}
.navbar li {
    padding: 0 10px;
    border-radius: 8px;
    margin: 0;
    transition: all .4s;
}
.navbar li:hover {
background-color: #FDBF0F;
}
.navbar li:hover a {
 color: #fff;
}
@media (max-width:676px) {

  .navbar .links {
    position: absolute;
    top: 100%;
    flex-direction: column;
    width: 95%;
    background-color: #fff;
    border-radius: 0 0 5px 5px;
    z-index: 1000;
  }
  .navbar .links li {
   margin: 5px 0;
   padding: 10px;
   width: 100%;

  }
}
</style>

