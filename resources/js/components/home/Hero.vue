<template>
  <section class="py-11 bg-light-gradient border-bottom border-white border-5">
    <div
      class="bg-holder overlay overlay-light"
      :style="{backgroundImage: `url('${asset}img/gallery/header-bg.png')`,
        backgroundSize: 'cover'}"
    ></div>
    <div class="container">
      <div class="row flex-center">
        <div class="col-12 mb-10">
          <div class="d-flex align-items-center flex-column">
            <h1 class="fw-normal">With an outstanding style, only for you</h1>
            <h1 class="fs-4 fs-lg-8 fs-md-6 fw-bold">
              Exclusively designed for you
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import main from '../../composition/main';

export default {
    setup(){
      const{asset} = main()
      return {
           asset,
      }
    }
};
</script>

<style>
</style>