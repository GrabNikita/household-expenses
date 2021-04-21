/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

//support vuex
import Vuex from 'vuex';
Vue.use(Vuex);
import storeData from "./store/index";

const store = new Vuex.Store(
    storeData
);

//Import View Router
import VueRouter from 'vue-router'
Vue.use(VueRouter);
//Routes
import { routes } from './routes';
//Register Routes
const router = new VueRouter({
    mode: 'history',
    routes,

});
router.beforeEach((to, from, next) => {
    console.log(to, from, next);
});

//Pagination laravel-vue-pagination
Vue.component('pagination', require('laravel-vue-pagination'));

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

/*const files = require.context('./components', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))*/

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import TheApp from './components/TheApp';
import TheHeader from './components/TheHeader/TheHeader';
import TheHeaderMainMenu from './components/TheHeader/TheHeaderMainMenu';
import TheHeaderMainMenuItem from './components/TheHeader/TheHeaderMainMenuItem';
import TheHeaderAuthPanel from './components/TheHeader/TheHeaderAuthPanel';
import TheContent from './components/TheContent';
import TheFooter from './components/TheFooter';

const app = new Vue({
    el: '#app-wrapper',
    router,
    store,
    components: {
        TheFooter,
        TheContent,
        TheHeaderAuthPanel,
        TheHeaderMainMenuItem,
        TheHeaderMainMenu,
        TheHeader,
        TheApp,
    }
});
