<template>
  <div class="product-list">
    <h2>Products</h2>
    <div v-for="product in productDataList" :key="product.id" class="product">
      <img class="product-image" :alt="product.name" :src="require('./../assets/product-images/Amanda Waller Shirt.png')">
      <h4 class="product-name">{{product.name}}</h4>
      <div class="categories">{{product.category_name}}</div>
      <div class="product-description">{{product.description}}</div>
      <div class="product-price">
        <span class="sign">€</span>
        {{product.price}}
        <span class="sub">,-</span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Products",
  data() {
    return {
      productDataList: null
    };
  },
  created() {
    fetch("http://vue-storefront.localhost/api/product/read.php")
        .then(response => response.json())
        .then(data => (this.productDataList = data.records ));
  }
};
</script>
