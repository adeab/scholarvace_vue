
require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
import NewsFeed from './components/NewsFeed.vue';
import Blog from './components/Blog.vue';
import Video from './components/Video.vue';
import Hub from './components/Hub.vue';
import F_two_F from './components/F_two_F.vue';
import Opportunity from './components/Opportunity.vue';


Vue.use(VueRouter)

let routes = [
    { path: '/home', component: NewsFeed },
    { path: '/hub', component: Hub },
    { path: '/blog', component: Blog },
    { path: '/video', component: Video},
    { path: '/F_two_F', component: F_two_F},
    { path: '/opportunity', component: Opportunity }
  ]

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
  })

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    router
});
