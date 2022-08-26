// app.js

require('./bootstrap');
import {createApp} from 'vue';

window.Vue = require('vue');
// console.log("vue =>>>>>>>>>>..", Vue.use);

// import VueRouter from 'vue-router';
// Vue.use(VueRouter);

// import VueAxios from 'vue-axios';
// import axios from 'axios';

import App from './App.vue';
// Vue.use(VueAxios, axios);

import HomeComponent from './components/HomeComponent.vue';
import CreateComponent from './components/CreateComponent.vue';
import RegisterComponent from './components/RegisterComponent.vue';
import LoginComponent from './components/LoginComponent.vue';

// const routes = [
//   {
//       name: 'home',
//       path: '/',
//       component: HomeComponent
//   },
//   {
//       name: 'create',
//       path: '/create',
//       component: CreateComponent
//   },
//   {
//       name: 'posts',
//       path: '/posts',
//       component: IndexComponent
//   },
//   {
//       name: 'edit',
//       path: '/edit/:id',
//       component: EditComponent
//   }
// ];

const app = createApp();

// const router = new VueRouter({ mode: 'history', routes: routes});
app.component('home-component', HomeComponent);
app.component('create-component', CreateComponent);
app.component('register-component', RegisterComponent);
app.component('login-component', LoginComponent);
// const app = new Vue($mount('#app');
app.mount('#app');