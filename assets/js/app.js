/*!

=========================================================
* Vue Argon Design System - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/
/*
import Vue from "vue";
import { store } from './store/store'
import App from "./App.vue";
import router from "./router";
import Argon from "./plugins/argon-kit";
import './registerServiceWorker';
import Publicity from "./views/Publicity.vue";
import Document from "./views/Document.vue";

Vue.config.productionTip = false;
Vue.use(Argon);
new Vue({
  el:"#app",
  store,
  router,
  components:{Document,Publicity},
  beforeMount: function () {
    store.commit('token', process.env.API_TOKEN)
  },
  //template: '<App/>',
  render: h => h(App)
});


*/
import Vue from 'vue'
import App from './App.vue'
import Argon from "./plugins/argon-kit";
import route from "./router";
import { store } from './store/authentication-store'
import VueRouter from "vue-router";
import routes from "./routes/routes";
import Vuelidate from 'vuelidate';
Vue.use(Vuelidate);
Vue.use(Argon);

// eslint-disable-next-line no-new

const router = new VueRouter({
  routes: routes
})

router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.requiresAuth)) {
    console.log('route need authentication')
    if (store.getters.isAuthenticated !== false) {
      console.log('user is authenticated: ' + store.getters.isAuthenticated)
      next()
    } else {
      console.log('page should be redirect')
      next({
        path: '/',
        query: { redirect: to.fullPath }
      })
    }
  } else {
    next()
  }
})

new Vue({
  el: '#app',
  store,
  router,
  //route,
  template: '<App v-bind:csrf_token="csrf_token"/>',
  components: { App },
  data: {
    csrf_token: '',
    last_email: '',
    //token:''
  },
  beforeMount: function () {
      //  this.token=this.$el.attributes['token'].value()
        this.csrf_token = this.$el.attributes['data-token'].value,
        this.last_email = this.$el.attributes['data-last-email'].value
        this.$store.commit('change', this.$el.attributes['data-is-authenticated'].value)
  }
})