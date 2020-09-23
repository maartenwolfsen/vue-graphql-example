<template>
  <div class="card text-center m-3">
    <h5 class="card-header">Simple GET Request</h5>
    <div class="card-body">Total vue packages: {{totalVuePackages}}</div>
  </div>
</template>

<script>
export default {
  name: "get-request",
  data() {
    return {
      totalVuePackages: null
    };
  },
  created() {
    // Simple GET request using fetch
    fetch("http://vue-storefront.localhost/api/product/read_single.php?id=1")
        .then(response => response.json())
        .then(data => (this.totalVuePackages = data ));
  }
};
</script>
