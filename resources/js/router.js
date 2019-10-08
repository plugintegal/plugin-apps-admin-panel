import Vue from 'vue'
import Router from 'vue-router'
import Home from './pages/Home.vue'
import Members from './pages/members/Member.vue'
import Events from './pages/event/Events.vue'
import Presences from './pages/presences/Presence.vue'
import Login from './pages/Login.vue'
import store from './store.js'


Vue.use(Router)

const router = new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'login',
            component: Login
        },
        {
            path: '/home',
            name: 'home',
            component: Home
        },
        {
            path: '/members',
            name: 'members',
            component: Members
        },
        {
            path: '/events',
            name: 'events',
            component: Events
        },
        {
            path: '/presence',
            name: 'presence',
            component: Presences
        }
    ]
})
export default router

