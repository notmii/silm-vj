/*jshint esversion: 6 */
import Vue from 'vue';
import VueRouter from 'vue-router';
import { routes } from './routes';

Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'history',
  routes
});
const app = new Vue({
  router
}).$mount('#app');
