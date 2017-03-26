<template>
  <div id="app">
    <pc-routes-list
      :routes="routes"
      @load-route="loadRoute"
      ></pc-routes-list>
    <pc-map
      :markers="markers"></pc-map>
  </div>
</template>

<script>

import Vue from 'vue'
import pcRoutesList from './components/RoutesList'
import pcMap from './components/Map'

export default {
  name: 'app',

  data () {
    return {
      routes: [],
      markers: [],
      selectedRoute: null
    }
  },
  methods: {
    loadRoute (routeId){
      if (routeId === this.selectedRoute ) {
        return;
      }
      this.selectedRoute = routeId
      Vue.http.get(`/api/routes/${routeId}/attractions`).then(response => {
        this.markers = response.body
        console.log(this.markers)
      }, response => {
        console.log("Something went wrong")
      });
    }
  },
  components: {
    pcRoutesList,
    pcMap
  },
  mounted() {
    Vue.http.get('/api/routes').then(response => {
      this.routes = response.body
    }, response => {
      console.log("Something went wrong")
    });
  }
}
</script>

<style lang="scss">
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
