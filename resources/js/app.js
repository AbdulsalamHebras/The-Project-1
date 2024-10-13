import { createApp } from 'vue'
import '../css/style.css'
import '../css/app.css'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import store from './store'
import router from './router'
import App from './App.vue'
library.add(fas);
createApp(App)
    .component('fa', FontAwesomeIcon)
    .use(store)
    .use(router)
    .mount('#app')
