/*jshint esversion: 6 */
const Foo = { template: '<div>foo</div>' };
const Bar = { template: '<div>bar</div>' };

export const routes = [
  { path: '/foo', component: Foo },
  { path: '/bar', component: Bar },
  { path: '/dasboard', component: () => import(/* webpackChunkName: dashboard */ '@modules/dashboard/dashboard.vue') },
];
