// import './bootstrap';

import MenuBar from "$/Components/MenuBar.vue"
import App from "$/App.vue"
import {createApp} from "vue"

// const menu = createApp(MenuBar)
const app = createApp(App)
app.component('MenuBar', MenuBar)


// menu.mount('#menu')
app.mount('#app')
