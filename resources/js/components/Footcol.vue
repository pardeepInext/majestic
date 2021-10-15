<template>
  <div class="col-6 col-lg-2 mb-3">
    <h5 class="lh-lg fw-bold text-1000">{{ info.heading }}</h5>
    <ul class="list-unstyled mb-md-4 mb-lg-0">
      <li class="lh-lg" v-for="(menu,index) in info.menus" :key="index">
        <a class="text-800 text-decoration-none" href="javascript:void(0);">{{ menu }}</a>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ['info'],
 
};
</script>

<style>
</style>