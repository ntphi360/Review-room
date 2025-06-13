<template>
  <p>{{ listing.id }} {{ listing.street }} {{ listing.street_nr }} {{ listing.city }}, for {{ listing.price }}</p>
</template>

<script setup>
// import { Link } from '@inertiajs/vue3'
  const props = defineProps({
    listing: Object,
  })
</script>