<template>
 <div>
  {{ listing.street }} ${{ listing.street_nr }}, {{ listing.city }}
 </div>
</template>

<script setup>
  defineProps({
    listing: Object,
  })

</script>