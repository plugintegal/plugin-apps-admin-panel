import Vue from "vue";
import Router from "vue-router";
import Home from "./pages/Home.vue";
import Landing from "./pages/Landing.vue";
import Members from "./pages/members/Member.vue";
import Events from "./pages/event/Events.vue";
import Presences from "./pages/presences/Presence.vue";
import DetailMember from "./pages/members/DetailMember.vue";
import Login from "./pages/Login.vue";
import store from "./store/store.js";
import AddEvent from "./pages/event/AddEvent.vue";
import ParticipantEvent from "./pages/event/ParticipantEvent.vue";
import CategoryEvent from './pages/event/CategoryEvent'

Vue.use(Router);

const router = new Router({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "first",
            title: "Login Page Administrator",
            component: Landing
        },
        {
            path: "/login",
            name: "login",
            title: "Login",
            component: Login
        },
        {
            path: "/home",
            name: "home",
            title: "Beranda",
            component: Home
        },
        {
            path: "/members",
            name: "members",
            title: "Keanggotaan",
            component: Members
        },
        {
            path: "/events",
            name: "events",
            component: Events
        },
        {
            path: "/presence",
            name: "presence",
            title: "Absensi",
            component: Presences
        },
        {
            path: "/members/:member_id",
            name: "detailMember",
            title: "Detail Member",
            component: DetailMember
        },
        {
            path: "/event/add",
            name: "addevent",
            title: "Tambah Event",
            component: AddEvent
        },
        {
            path: "/event/cat",
            name: "catEvent",
            title: "Kategori Event",
            component: CategoryEvent
        },
        {
            path: "/event/participant",
            name: "participant",
            title: "Peserta Event",
            component: ParticipantEvent
        }
    ]
});

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (store.getters.isLoggedIn) {
            next();
            return;
        }
        next("/login");
    } else {
        next();
    }
});

export default router;
