/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import axios from 'axios';
window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter)
Vue.prototype.axios = axios;
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home-component', require('./views/Homeprojectfunding.vue').default);
Vue.component('detail-component', require('./components/DetailComponent.vue').default);
Vue.component('bill-page', require('./views/Fundingpage.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const routes = [
    { path: '/detail/:id',name:'detail' ,component:  () => import(/* webpackChunkName: "about" */ "./components/DetailComponent.vue") },
    { path: '', component: () => import(/* webpackChunkName: "about" */  "./views/Homeprojectfunding.vue") }
]

const router = new VueRouter({
    routes // short for `routes: routes`
})

const app = new Vue({
    el: '#app',
    router,
});
