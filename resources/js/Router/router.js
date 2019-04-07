import Vue from 'vue'
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import login from '../components/Login/Login';

const routes = [
    {path: '/login', component: login}
];

const router = new VueRouter({
    routes,
    hashgbang: false,
    mode: 'history'
});

export default router;
