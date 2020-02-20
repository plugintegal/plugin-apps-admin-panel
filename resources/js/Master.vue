<template>
<div>
    <layout v-if="isLoggedIn" />
    <login v-else />
</div>
</template>

<script>
import Landing from './pages/Landing.vue'
import Login from './pages/Login.vue'
import Layout from './pages/Layout.vue'
export default {
computed:{
    isLoggedIn: function(){
        return this.$store.getters.isLoggedIn
    },
    authStatus: function(){
        return this.$store.getters.authStatus
    }
},
components: {
    "layout" : Layout,
    "landing" : Landing,
    "login" : Login,
}
};
</script>
