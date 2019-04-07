import Vue from 'vue'
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import login from '../components/Login/Login';
import logout from '../components/Login/Logout';
import signup from '../components/Login/Signup';
import forum from '../components/Forum/Forum';

const routes = [
    {path: '/login', component: login},
    {path: '/logout', component: logout},
    {path: '/signup', component: signup},
    {path: '/forum', component: forum, name: 'forum'}
];

const router = new VueRouter({
    routes,
    hashgbang: false,
    mode: 'history'
});

export default router;
