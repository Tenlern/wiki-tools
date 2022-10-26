// import './bootstrap';

import MenuBar from './Components/MenuBar.vue'
import {createApp} from "vue";

const menu = createApp(MenuBar)
const app = createApp({})

menu.mount('#menu')
// app.mount('#app')
