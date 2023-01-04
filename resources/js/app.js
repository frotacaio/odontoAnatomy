import './bootstrap';

import { createApp, h, VueElement } from 'vue'
import { createInertiaApp , Link} from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import { message, Steps, Button, Step } from 'ant-design-vue';
import { DatePicker  } from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';



InertiaProgress.init()

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(DatePicker)
      .use(message)
      .use(Steps)
      .use(Step)
      .use(Button)
      .component('Link', Link)
      .mount(el)
  },
})