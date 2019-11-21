<template>
  <div id="wrapper">
    <app-navbar v-if="isAuth"/>

    <app-sidebar v-if="isAuth"/>

    <div class="content-page">
      <div class="content">
        <router-view v-if="isAuth"></router-view>
        <app-footer v-if="isAuth"/>
      </div>
    </div>
  </div>
</template>

<script>
import { mapState, mapGetters } from "vuex";
import Navbar from "./components/NavbarComponent.vue";
import Sidebar from "./components/SidebarComponent.vue";
import Footer from "./components/FooterComponent.vue";
export default {
  computed:{
    ...mapState(['token']),
    ...mapGetters(['isAuth'])
  },
  components: {
    "app-navbar": Navbar,
    "app-sidebar": Sidebar,
    "app-footer": Footer
  }
};
</script>
