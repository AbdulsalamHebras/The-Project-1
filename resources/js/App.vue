<template>
    <div>
        <router-view />
        <!-- {{ test }} -->
    </div>
</template>
<script setup>
import { computed } from 'vue';
import store from './store';

const test = computed(()=> store.state.test);
</script>

<style scoped>
/* .logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
} */
</style>
