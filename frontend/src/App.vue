<template>
  <div id="app">
    <button @click="getAllRoutes">click</button>
  </div>
</template>

<script>

//import {getAllRoutes} from './api/index'

export default {
  name: 'app',
  data () {
    return {
      routes: null
    }
  },
  methods: {
    getAllRoutes: function (argument) {
      // GET /someUrl
      this.$http.get('/api/routes/1').then(response => {
        console.log(response.body);
        // get body data
        this.routes = response.body;

      }, response => {
        console.log(response);
      });
    }
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
  margin-top: 60px;
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
