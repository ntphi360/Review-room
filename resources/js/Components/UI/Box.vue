<template>
  <div class="border border-gray-200 dark:border-gray-800 rounded-md p-4 shadow-sm dark:text-gray-300">
    <div class="text-gray-500 font-medium">
       <slot name="header"/>
     </div>
     <div class="mt-2">
        <slot/>
     </div>
  </div>
</template>