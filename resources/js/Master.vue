<template>
  <div id="wrapper">
    <app-navbar />

    <app-sidebar />

    <div class="content-page">
      <div class="content">
        <router-view></router-view>
        <app-footer />
      </div>
    </div>
  </div>
</template>

<script>
// import { mapState, mapGetters } from "vuex";
import Navbar from "./components/NavbarComponent.vue";
import Sidebar from "./components/SidebarComponent.vue";
import Footer from "./components/FooterComponent.vue";
export default {
  components: {
    "app-navbar": Navbar,
    "app-sidebar": Sidebar,
    "app-footer": Footer
  }
};
</script>
