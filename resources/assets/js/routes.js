import VueRouter from 'vue-router';
import { Landing, Dashboard, NotFound } from './views';

export default new VueRouter({
  mode: 'history',
  linkActiveClass: 'is-active',
  linkExactActiveClass: '',
  routes: [
    { path: '/'         , component: Landing   },
    { path: '/dashboard', component: Dashboard },
    { path: '*'         , component: NotFound  }
  ]
});