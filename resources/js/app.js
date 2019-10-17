import Vue from 'vue'
import router from './router.js'
import Master from './Master.vue'
import store from './store.js'
import Swal from 'sweetalert2'

window.Swal = Swal



window.Vue = require('vue');

// Vue.component('login', require('./pages/Login.vue').default);


const app = new Vue({
    el: '#app',
    router,
    store,
    components:{
        Master
    }
});
