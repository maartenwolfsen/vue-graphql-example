<template>
  <div class="card">
    <header>
      <img class="logo" alt="Headless Example - Using Vue and the REST api" src="./assets/logo.png">
      <h1>Headless Example</h1>
      <h3>Using Vue and the REST api</h3>
    </header>
    <Products/>
  </div>
</template>

<style>
  @import './assets/css/main.css';
</style>

<script>
import Products from './components/Products.vue'

export default {
  name: "vue-storefront",
  components: {
    Products
  }
};
</script>
