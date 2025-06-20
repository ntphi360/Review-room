<template>
  <div v-for="listing in listings" :key="listing.id">
    <Link :href="`/listing/${listing.id}`">
      <ListingAddress :listing="listing"/>
    </Link>
    <div>
      <Link :href="`/listing/${listing.id}/edit`">Edit</Link> &nbsp;
      <Link :href="`/listing/${listing.id}`" method="DELETE" as="button">Delete</Link>
    </div>
     

  </div>
</template>

<script setup>
  import { Link } from '@inertiajs/vue3'
  import ListingAddress from '@/Components/ListingAddress.vue';
  const props = defineProps({
    listings: Array,
  })
</script>