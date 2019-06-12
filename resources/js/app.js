/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue'
//import App from './App'

require('./bootstrap');

window.Vue = require('vue');

Vue.config.productionTip = false;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

//const files = require.context('./', true, /\.vue$/i);
//files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('app', require('./components/App.vue'));
Vue.component('vl-day-selector', require('./components/vl-day-selector.vue').default);
Vue.component('vl-range-selector', require('./components/vl-range-selector.vue').default);
Vue.component('select_box', require('./components/Search_block.vue').default);
Vue.component('header', require('./components/Header.vue').default);
Vue.component('footer', require('./components/Footer.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
