<template>
  <Box>
    <Link :href="route('listing.show',{ listing: listing.id })">
      <div class="flex items-center gap-1">
        <Price :price="listing.price" class="text-xl font-bold"/>
        <div class="text-xs text-gray-500">
          <Price :price="monthlyPayment"/> pm
        </div>
      </div>
      <ListingSpace :listing="listing"/>
      <ListingAddress :listing="listing" class="text-gray-500 "/>
    </Link>
    <div>
      <Link :href="route('listing.edit',{listing: listing.id})">Edit</Link> &nbsp;
      <Link :href="route('listing.destroy',{listing: listing.id})" method="DELETE" as="button" class="cursor-pointer">Delete</Link>
    </div>
  </Box>
</template>

<script setup>
  import { Link } from '@inertiajs/vue3'
  import { useMonthlyPayment } from '@/Composables/useMonthlyPayment';
  import Box from '@/Components/UI/Box.vue';
  import ListingSpace from '@/Components/ListingSpace.vue';
  import Price from '@/Components/Price.vue';
  import ListingAddress from '@/Components/ListingAddress.vue';

  const props = defineProps({
    listing: Object,
  })

  const { monthlyPayment } = useMonthlyPayment(props.listing.price,2.5,25)


  

</script>
