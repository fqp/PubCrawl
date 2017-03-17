import Vue from 'vue';
import VueResource from 'vue-resource';

Vue.use(VueResource);
Vue.http.options.root = '/'

export function getAllRoutes() {
  // GET /someUrl
  this.$http.get('/routes').then(response => {

    // get body data
    this.routes = response.body;

  }, response => {
    // error callback
  });
}