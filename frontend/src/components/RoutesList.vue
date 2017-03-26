<template>
  <div class="routesContainer">
    <button v-for="route in routes" @click="clickRoute(route.id)">{{ route.name }}</button>
  </div>
</template>

<script>
export default {
  name: 'pcRoutesList',
  props: ['routes'],
  methods: {
    clickRoute: function (routeId) {
      this.$emit('load-route', routeId)
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
h1, h2 {
  font-weight: normal;
}

.routesContainer {
  display: flex;
  width: 100%;
  justify-content: center;

  button {
    flex: 0 1 20em;
    border: 2px ;
    padding: 10px;
    margin-right: 5px;
    overflow: hidden;
    color: white;
    font-size: 20px;
    border-color: #ECEFF1;
    background: #7986cb;
    transition: border-color 0.3s, background-color 0.3s;
    transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
  }

  button:focus {
    outline: none;
    background: #909fef;
  }
}

a {
  color: #42b983;
}
</style>
