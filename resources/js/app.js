import Vue from 'vue'
import router from './router.js'
import Master from './Master.vue'
import store from './store.js'


window.Vue = require('vue');

// Vue.component('login', require('./pages/Login.vue').default);


const app = new Vue({
    el: '#app',
    router,
    components:{
        Master
    }
});
