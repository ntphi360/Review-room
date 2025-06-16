<template>
  <div>
    <form @submit.prevent="create">
      <div>
        <div>
          <label>Beds</label>
          <input v-model.number="form.beds" type="text" class="input"/>
        </div>

        <div>
          <label>Baths</label>
          <input v-model.number="form.baths" type="text" class="input"/>
        </div>

        <div>
          <label>Area</label>
          <input v-model.number="form.area" type="text" class="input"/>
        </div>

        <div>
          <label>City</label>
          <input v-model="form.city" type="text" class="input"/>
        </div>

        <div>
          <label>Post Code</label>
          <input v-model="form.code" type="text" class="input"/>
        </div>

        <div>
          <label>Street</label>
          <input v-model="form.street" type="text" class="input"/>
        </div>

        <div>
          <label>Street Nr</label>
          <input v-model.number="form.street_nr" type="text" class="input"/>
        </div>

        <div>
          <label>Price</label>
          <input v-model.number="form.price" type="text" class="input"/>
        </div>

        <div>
          <button class="btn-normal" type="submit">Create</button>
        </div>
      </div>
    </form>
  </div>
</template>

<script setup>
  import { useForm } from '@inertiajs/vue3'

  const form = useForm({
    beds: 0,
    baths: 0,
    area: 0,
    city: null,
    street: null,
    code: null,
    street_nr: null,
    price: 0,
  });

  const create = () => form.post('/listing');
</script>

<style scoped>
  label {
    margin-right: 2em;
  }

  div {
    padding: 2px
  }
</style>
