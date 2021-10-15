<template>
  <div
    class="carousel slide"
    id="carouselBestDeals"
    data-bs-touch="false"
    data-bs-interval="false"
  >
    <div class="carousel-inner">
      <div
        class="carousel-item"
        data-bs-interval="10000"
        v-for="(chunks, index) in products"
        :class="index == 0 && 'active'"
        :key="index"
      >
        <div class="row h-100 align-items-center g-2">
          <div
            class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100"
            v-for="(product, index) in chunks"
            :key="index"
          >
            <product :product="product" />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselBestDeals"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span
        ><span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselBestDeals"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span
        ><span class="visually-hidden">Next </span>
      </button>
    </div>
  </div>
</template>

<script>
import _ from "lodash";
import main from "../composition/main";
import Product from './Product';

export default {
  components: { Product },
  props: ["data", "divide"],
  setup() {
    const { asset } = main();
    return {
      asset,
    };
  },
  computed: {
    products() {
      return _.chunk(Object.values(this.data), this.divide);
    },
  },
};
</script>

<style></style>
