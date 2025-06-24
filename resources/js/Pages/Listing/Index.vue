<template>
  <div v-for="listing in listings" :key="listing.id">
    <Link :href="route('listing.show',{listing: listing.id})">
      <ListingAddress :listing="listing"/>
    </Link>
    <div>
      <Link :href="route('listing.edit',{listing: listing.id})">Edit</Link> &nbsp;
      <Link :href="route('listing.destroy',{listing: listing.id})" method="DELETE" as="button">Delete</Link>
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