
require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('Producto', require('./components/Producto.vue').default);
Vue.component('Entrada', require('./components/Entrada.vue').default);
Vue.component('Salida', require('./components/Salida.vue').default);

const app = new Vue({
    el: '#app',
    data :{
        menu:0,
       }
});
