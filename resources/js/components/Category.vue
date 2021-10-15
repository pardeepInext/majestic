<template>
  <div class="card card-span h-100 text-white">
    <img
      class="img-fluid category-image"
      :src="category.pic"
      :alt="category.name"
    />
    <div class="card-img-overlay ps-0"></div>
    <div class="card-body ps-0 bg-200">
      <h5 class="fw-bold text-1000 text-truncate">
        {{ category.name }}
      </h5>
    </div>
    <a class="stretched-link" href="javascript:void(0);"></a>
  </div>
</template>

<script>
export default {
  props: ["category"],
};
</script>

<style>
</style>