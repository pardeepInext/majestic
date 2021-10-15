<template>
  <div
    class="carousel slide"
    id="category-slider"
    data-bs-touch="false"
    data-bs-interval="false"
  >
    <div class="carousel-inner">
      <div
        class="carousel-item"
        data-bs-interval="10000"
        v-for="(chunks, index) in categories"
        :class="index == 0 && 'active'"
        :key="index"
      >
        <div class="row h-100 align-items-center g-2 justify-content-center">
          <div
            class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100"
            v-for="category in chunks"
            :key="category.id"
          >
            <category :category="category" />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#category-slider"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span
        ><span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#category-slider"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span
        ><span class="visually-hidden">Next </span>
      </button>
    </div>
  </div>
</template>

<script>
import Category from "./Category";

export default {
  props: ["data", "divide"],
  setup() {
    return {};
  },
  components: {
    Category,
  },
  computed: {
    categories() {
      return _.chunk(Object.values(this.data), this.divide);
    },
  },
};
</script>

<style>
</style>