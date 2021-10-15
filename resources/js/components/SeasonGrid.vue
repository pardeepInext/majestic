<template>
  <section class="pt-0" id="outlet">
    <div class="container">
      <div class="row h-100 g-0">
        <div class="col-md-6">
          <div class="card card-span h-100 text-white">
            <img
              class="card-img h-100"
              src="img/gallery/summer.png"
              alt="..."
            />
            <div class="card-img-overlay bg-dark-gradient rounded-0">
              <div
                class="
                  p-5 p-md-2 p-xl-5
                  d-flex
                  flex-column flex-end-center
                  align-items-baseline
                  h-100
                "
              >
                <h2 class="fs-md-4 fs-lg-7 text-light">
                  Men's collection
                  {{ season }} '{{
                    new Date().getFullYear().toString().substr(-2)
                  }}
                </h2>
              </div>
            </div>
            <a class="stretched-link" href="#!"></a>
          </div>
        </div>
        <div class="col-md-6 h-100">
          <div class="row h-100 g-0">
            <div class="col-md-6 h-100" v-for="exclusive in menCategories" :key="exclusive.id">
               <card :data="exclusive" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Card from "./Card";
export default {
  props:['menCategories'],
  data() {
    return {};
  },
  components: {
    Card,
  },
  computed: {
    season() {
      let season = "";
      const month = new Date().getMonth();
      if ([2, 3].includes(month)) season = "Spring";
      else if ([4, 5].includes(month)) season = "Summer";
      else if ([6, 7].includes(month)) season = "Monsoon";
      else if ([8, 9].includes(month)) season = "Autumn";
      else season = "Winter";
      return season;
    },
  },
};
</script>

<style></style>
