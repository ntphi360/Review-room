<template>
  <Link href="/listing">Listings</Link> &nbsp;
  <Link href="/listing/create">New Listings</Link>  
  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <slot>Default</slot>
</template>

<script setup>
  import { Link, usePage } from '@inertiajs/vue3'
  import { computed, ref } from 'vue';
  
  const page = usePage();
  const flashSuccess = computed(() => page.props.flash.success);
</script>

<style scoped>
  .success{
    background-color: green;
    color:white
  }
</style>

