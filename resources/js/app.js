
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


/**
 * Router setup
 */

import VueRouter from 'vue-router';
Vue.use(VueRouter);

let routes = [
  { path: '/dashboard', component: require('./components/Dashboard.vue').default },
  { path: '/datacolection', component: require('./components/DataColection.vue').default },
  { path: '/documentation', component: require('./components/Documentation.vue').default },
  { path: '/measuresplan', component: require('./components/MeasuresPlan.vue').default },
  { path: '/processing', component: require('./components/Processing.vue').default },
  { path: '/workplaces', component: require('./components/WorkPlaces.vue').default },
  
];

const router = new VueRouter({
  mode: 'history',
  routes // short for `routes: routes`
});


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
