<template>
  <p class="text-red-500 font-bold">This is Index</p>
  <Link href="/show">Show Page </Link>
  <p>This is message: {{ message }}</p>
</template>

<script setup>
  import { Link } from '@inertiajs/vue3'
  const props = defineProps({
    message: String,
  });

</script>