<template>
  <div id="wrapper">
    <app-navbar />

    <app-sidebar />

    <app-content />
  </div>
</template>

<script>
import Navbar from "../components/NavbarComponent";
import Content from "../components/ContentComponent.vue";
import Sidebar from "../components/SidebarComponent.vue";
export default {
  components: {
    "app-navbar": Navbar,
    "app-content": Content,
    "app-sidebar": Sidebar
  }
};
</script>
