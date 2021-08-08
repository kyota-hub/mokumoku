import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

import Top from '../components/Top'
import Login from '../components/Login'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/Top',
    name: 'Top',
    component: Top
  },
  {
    path: '/Login',
    name: 'Login',
    component: Login
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
