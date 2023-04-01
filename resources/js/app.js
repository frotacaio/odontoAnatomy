import './bootstrap';

import { createApp, h, VueElement } from 'vue'
import { createInertiaApp , Link} from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import { message, Steps, Button, Step, Tooltip , Popover, Input, Affix, Carousel} from 'ant-design-vue';
import { DatePicker  } from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';
import { icons } from 'ant-design-vue/lib/image/PreviewGroup';



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
      .use(Tooltip)
      .use(Popover)
      .use(Input)
      .use(Affix)
      .use(Carousel)
      .component('Link', Link)
      .mount(el)
  },
})