<template>
  <master>
    <hero />
    <choice :choices="choices" />
    <section class="py-0">
      <div class="container">
        <div class="row h-100">
          <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Best Deals</h5>
          </div>
          <div class="col-12">
            <product-slider :data="bestProducts" :divide="4" />
          </div>
          <div class="col-12 d-flex justify-content-center mt-5 mb-2">
            <a class="btn btn-lg btn-dark" href="javascipt:void(0);"
              >View All
            </a>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row h-100">
          <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Categories</h5>
          </div>
          <div class="col-12">
            <category-slider :data="categories" :divide="2" />
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row h-100">
          <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Bigest on Top Brands</h5>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-md-4" v-for="brand in brands" :key="brand.id">
                <card :data="brand" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <exclusive-grid :exclusives="subCategories" />
    <season-grid :menCategories="menCategories" />
  </master>
</template>

<script>
import Master from "../layouts/Master";
import Hero from "../components/home/Hero";
import Choice from "../components/Choice";
import ProductSlider from "../components/ProductSlider";
import CategorySlider from "../components/CategorySlider";
import ExclusiveGrid from "../components/ExclusiveGrid";
import SeasonGrid from "../components/SeasonGrid";
import Card from "../components/Card";
import main from "../composition/main";

export default {
  props: ["categories", "subCategories", "menCategories", "brands"],
  setup() {
    const { asset } = main();
    return {
      asset,
    };
  },
  components: {
    Master,
    Hero,
    Choice,
    ExclusiveGrid,
    ProductSlider,
    CategorySlider,
    SeasonGrid,
    Card,
  },
  data() {
    return {
      choices: [
        {
          name: "For Her",
          link: "javascript:void(0);",
          img: "her.png",
        },
        {
          name: "For Him",
          link: "javascript:void(0);",
          img: "him.png",
        },
      ],
      bestProducts: [
        {
          img: "flat-hill.png",
          name: "Flat Hill Slingback",
          before_Price: 300,
          now_price: 196,
        },
        {
          img: "blue-ring.png",
          name: "Ocean Blue Ring",
          before_Price: 250,
          now_price: 183,
        },
        {
          img: "wallet.png",
          name: "Brown Leathered Wallet",
          before_Price: 200,
          now_price: 175,
        },
        {
          img: "wrist-watch.png",
          name: "Silverside Wristwatch",
          before_Price: 269,
          now_price: 175,
        },
        {
          img: "flat-hill.png",
          name: "Flat Hill Slingback",
          before_Price: 300,
          now_price: 196,
        },
        {
          img: "blue-ring.png",
          name: "Ocean Blue Ring",
          before_Price: 250,
          now_price: 183,
        },
        {
          img: "wallet.png",
          name: "Brown Leathered Wallet",
          before_Price: 200,
          now_price: 175,
        },
        {
          img: "wrist-watch.png",
          name: "Silverside Wristwatch",
          before_Price: 269,
          now_price: 175,
        },
        {
          img: "flat-hill.png",
          name: "Flat Hill Slingback",
          before_Price: 300,
          now_price: 196,
        },
        {
          img: "blue-ring.png",
          name: "Ocean Blue Ring",
          before_Price: 250,
          now_price: 183,
        },
        {
          img: "wallet.png",
          name: "Brown Leathered Wallet",
          before_Price: 200,
          now_price: 175,
        },
        {
          img: "wrist-watch.png",
          name: "Silverside Wristwatch",
          before_Price: 269,
          now_price: 175,
        },
        {
          img: "flat-hill.png",
          name: "Flat Hill Slingback",
          before_Price: 300,
          now_price: 196,
        },
        {
          img: "blue-ring.png",
          name: "Ocean Blue Ring",
          before_Price: 250,
          now_price: 183,
        },
        {
          img: "wallet.png",
          name: "Brown Leathered Wallet",
          before_Price: 200,
          now_price: 175,
        },
        {
          img: "wrist-watch.png",
          name: "Silverside Wristwatch",
          before_Price: 269,
          now_price: 175,
        },
      ],
    };
  },
  computed: {
    exclusiveRow() {
      return this.subCategories;
    },
  },
  mounted() {},
};
</script>

<style>
</style>