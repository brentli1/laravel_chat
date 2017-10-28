import './bootstrap';
import Vue from 'vue';
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import Vuetify from 'vuetify';

import Base from './components/Base.vue';

Vue.use(Vuex);
Vue.use(Vuetify);
Vue.use(VueRouter);

const routes = [

];

const router = new VueRouter({
	routes
});

new Vue({
    el: '#app',
    router,
    render: h => h(Base)
})
