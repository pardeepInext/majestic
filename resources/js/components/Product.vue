<template>
  <div class="card card-span h-100 text-white">
    <img
      class="img-fluid h-100"
      :src="`${asset}img/gallery/${product.img}`"
      :alt="product.name"
    />
    <div class="card-img-overlay ps-0"></div>
    <div class="card-body ps-0 bg-200">
      <h5 class="fw-bold text-1000 text-truncate">
        {{ product.name }}
      </h5>
      <div class="fw-bold">
        <span class="text-600 me-2 text-decoration-line-through">{{
          `$ ${product.before_Price}`
        }}</span
        ><span class="text-primary">{{ `$${product.now_price}` }}</span>
      </div>
      <div class="d-flex justify-content-end product-btn">
        <button class="btn btn-dark btn-xs me-1">Buy</button>
        <button class="btn btn-secondary btn-sm">Cart</button>
      </div>
    </div>
    <a class="stretched-link" href="javascript:void(0);"></a>
  </div>
</template>

<script>
import main from "../composition/main";

export default {
    props:['product'],
    setup(){
        const { asset } = main();
        return {
           asset,
        }
    }
};
</script>

<style>
</style>