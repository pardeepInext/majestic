<template>
    <main class="main" id="top">
        <Header />
          <slot />
        <Footer />
    </main>
</template>

<script>
import { ref } from "vue";
import Header from "../components/Header";
import Footer from "../components/Footer";
export default {
    data(){
      return{
        url : this.$inertia.page.url
      }
    },
    components: {
        Header,
        Footer,
    },
    mounted() {
      
    },
};
</script>

<style>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
