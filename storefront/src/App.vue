<template>
  <div class="card">
    <header>
      <div class="header-data">
        <img class="logo" alt="Headless Example - Using Vue and the REST api" src="./assets/logo.png">
        <h1>Headless Example</h1>
        <h4>Using Vue and the REST api</h4>
      </div>
    </header>
    <Products/>
  </div>
</template>

<style>
  @import 'https://fonts.googleapis.com/css2?family=Montserrat:wght@200;700&family=Playfair+Display:wght@800&display=swap';
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
