import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App.vue'

import Home from '@/components/Home.vue'
import Detail from '@/components/Detail.vue'
import AddInhabitant from '@/components/AddInhabitant.vue'


Vue.use(VueRouter)

Vue.config.productionTip = false

const routes = [
  {
    path: '',
    redirect: '/home'
  },
  {
    path: '/home',
    name: 'home',
    component: Home
  },
  {
    path: '/detail/:id',
    name: 'detail',
    component: Detail
  },
  {
    path: '/create',
    name: 'create',
    component: AddInhabitant
  },
  {
    path: '/edit',
    name: 'edit',
    component: AddInhabitant
  }
]

const router = new VueRouter({
  mode: 'history',
  routes
})

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
