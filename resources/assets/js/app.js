
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 window.$ = window.jQuery = require('jquery');

 require('./bootstrap');

 require('bootstrap-select');

 $(document).ready(function(){
 	$('.selectpicker').selectpicker({
 		style: 'btn-danger btn-lg',
 		size: 4,
 		language: 'TR'
 	});

 	$('#allCountiesSelect').on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
		window.location = $(this).val();
 	});
 });

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });
