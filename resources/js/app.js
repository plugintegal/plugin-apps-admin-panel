import Vue from 'vue'
import router from './router.js'
import Master from './Master.vue'
import store from './store/store.js'
import Swal from 'sweetalert2'
import axios from 'axios'

Vue.prototype.$http = axios;

const token = localStorage.getItem('token');
if (token) {
  Vue.prototype.$http.defaults.headers.common['Authorization'] = token
}

Vue.config.productionTip = false

window.Swal = Swal

// window.Vue = require('vue');
// Vue.component('login', require('./pages/Login.vue').default);
// const app = new Vue({
//     el: '#app',
//     router,
//     store,
//     components:{
//         Master
//     }
// });
new Vue({
    router,
    store,
    render: h => h(Master)
  }).$mount('#app')
