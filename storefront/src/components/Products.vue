<template>
  <div class="product-list">
    <h2>Products</h2>
    <div v-for="product in productDataList" :key="product.id" class="products">
      <div class="product" data-id="${product.id}">
        <img class="product-image" src="./..//assets/product-images/Rolex Watch.png">
        <h4 class="product-name">{{product.name}}</h4>
        <div class="categories">{{product.category_name}}</div>
        <div class="product-description">{{product.description}}</div>
        <div class="product-price">{{product.price}}</div>
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
    // Simple GET request using fetch
    fetch("http://vue-storefront.localhost/api/product/read.php")
        .then(response => response.json())
        .then(data => (this.productDataList = data.records ));
  }
};
</script>
