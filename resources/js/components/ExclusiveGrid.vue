<template>
  <section>
    <div class="container">
      <div class="row h-100 g-0">
        <div class="col-md-6">
          <div
            class="bg-300 p-4 h-100 d-flex flex-column justify-content-center"
          >
            <h4 class="text-800">Exclusive Women collection {{ new Date().getFullYear() }}</h4>
            <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">
              Be exclusive
            </h1>
            <p class="mb-5 fs-1">
              The best everyday option in a Super Saver range within a
              reasonable price. It is our responsibility to keep you 100 percent
              stylish. Be smart &amp; , trendy with us.
            </p>
            <div class="d-grid gap-2 d-md-block">
              <a class="btn btn-lg btn-dark" href="#" role="button">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <card :data="exclusives[0]" />
        </div>
      </div>
      <div class="row h-100 g-2 py-1">
        <div class="col-md-4"  v-for="(exclusive,index) in exclusiveRow"
            :key="index">
          <card
            :data="exclusive"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Card from "./Card";

export default {
  props: ["exclusives"],
  data(){
    return {

    }
  },
  components: {
    Card,
  },
  computed: {
    exclusiveRow() {
      return this.exclusives.slice(1);
    },
  },
};
</script>

<style>
</style>