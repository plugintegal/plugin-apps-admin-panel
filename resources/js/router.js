import Vue from 'vue'
import Router from 'vue-router'
import Home from './pages/Home.vue'
import Members from './pages/members/Member.vue'
import Events from './pages/event/Events.vue'
import Presences from './pages/presences/Presence.vue'
import DetailMember from './pages/members/DetailMember.vue'
import Login from './pages/Login.vue'
import store from './store.js'
import AddEvent from './pages/event/AddEvent.vue'


Vue.use(Router)

const router = new Router({
    mode: 'history',
    routes: [
        {
            path: '/login',
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
        },
        {
            path: '/members/:member_id',
            name: 'detailMember',
            component: DetailMember
        },
        {
            path: '/event/add',
            name: 'addevent',
            component: AddEvent
        }
    ]
})

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        let auth = store.getters.isAuth
        if (!auth) {
            next({ name: 'login' })
        } else {
            next()
        }
    } else {
        next()
    }
})
export default router

