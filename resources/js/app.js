require('./bootstrap');

window.Vue = require('vue');
Vue.use(require('bootstrap-vue'));
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('login', require('./components/login.vue').default);

const app = new Vue({
    el: '#app',
});
