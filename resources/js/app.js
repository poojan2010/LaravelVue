/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js');


require('./bootstrap');

window.Vue = require('vue').default;

import Form from './Form'
window.Form= Form


import VueRouter from 'vue-router';

Vue.use(VueRouter);

import routes from './routes';


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/*
Vue.component('login', require('./components/login.vue').default);
Vue.component('signup', require('./components/signup.vue').default);
*/



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});

