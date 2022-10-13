import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp , Link} from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import route from 'ziggy-js'
import { ZiggyVue } from './ziggy'


InertiaProgress.init()

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component('Link', Link)
      .mount(el)
  },
})