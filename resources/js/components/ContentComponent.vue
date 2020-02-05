<template>
    <div class="content-page">
      <div class="content">
        <router-view ></router-view>
        <app-footer/>
      </div>
    </div>
</template>
<script>
import Footer from './FooterComponent'
export default {
    components: {
        "app-footer" : Footer
    }

}
</script>
