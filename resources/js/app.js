// import './bootstrap';

import MenuBar from '$/Components/MenuBar.vue'
import FilterList from '$/FilterList.vue'
import {createApp} from "vue/dist/vue.esm-bundler"

// const menu = createApp(MenuBar)
const app = createApp(FilterList)


// menu.mount('#menu')
app.mount('#app')
