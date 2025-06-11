// import './bootstrap';
import './bootstrap';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
// import { ZiggyVue } from 'ziggy';
// import MainLayout from './Layouts/MainLayout.vue';



createInertiaApp({
  progress: {
    delay: 0,
    color: '#ff0000',
    includeCSS: true,
    showSpinner: true,
  },

  resolve: async (name) => {
    const pages = import.meta.glob('./Pages/**/*.vue')
    const page = (await pages[`./Pages/${name}.vue`]()) 
    // page.default.layout = page.default.layout || MainLayout

    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      // .use(ZiggyVue)
      .mount(el)
  },
})
