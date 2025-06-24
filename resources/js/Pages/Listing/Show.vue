<template>
  <p>{{ listing.id }}. {{ listing.street }} {{ listing.street_nr }} {{ listing.city }}, for {{ listing.price }}</p>
</template>

<script setup>
  const props = defineProps({
    listing: Object,
  })
</script>