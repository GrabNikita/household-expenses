require('./bootstrap');

window.Vue = require('vue').default;

import Vuex from 'vuex';
Vue.use(Vuex);
import storeData from "./store/index";

const store = new Vuex.Store(
    storeData
);

import VueRouter from 'vue-router';
Vue.use(VueRouter);
import { routes } from './routes';
const router = new VueRouter({
    mode: 'history',
    routes: routes,

});

Vue.component('pagination', require('laravel-vue-pagination'));

import TheApp from './components/TheApp';
const app = new Vue({
    el: '#app-wrapper',
    router: router,
    store: store,
    render: h => h(TheApp),
});
