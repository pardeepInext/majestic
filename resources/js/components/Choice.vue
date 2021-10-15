<template>
  <section class="py-0" id="header" style="margin-top: -23rem !important">
    <div class="container">
      <div class="row g-0">
        
        <div class="col-md-6" v-for="(choice,index) in choices" :key="index">
          <div class="card card-span h-100 text-white">
            <img
              class="img-fluid"
              :src="`${asset}img/gallery/${choice.img}`"
              width="790"
              alt="..."
            />
            <div class="card-img-overlay d-flex flex-center">
              <a class="btn btn-lg btn-light" :href="choice.link">{{ choice.name }}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import main from '../composition/main';
export default {
   props: ['choices'],
   setup(context,props){
     const { asset} = main();
     return {
          asset,
     }
   }
   
};
</script>

<style>
</style>
