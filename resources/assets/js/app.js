
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import CompaniesIndex from './components/companies/CompaniesIndex.vue';
import CompaniesCreate from './components/companies/CompaniesCreate.vue';
import CompaniesEdit from './components/companies/CompaniesEdit.vue';

import FilmsIndex from './components/films/FilmsIndex.vue';
import FilmsCreate from './components/films/FilmsCreate.vue';
import FilmsEdit from './components/films/FilmsEdit.vue';
import FilmsAbout from './components/films/FilmsAbout.vue';
const routes = [
    {
        path: '/',
        components: {
            companiesIndex: CompaniesIndex,
            filmsIndex: FilmsIndex,
        }
    },
    {path: '/admin/companies/create', component: CompaniesCreate, name: 'createCompany'},
    {path: '/admin/companies/edit/:id', component: CompaniesEdit, name: 'editCompany'},
    {path: '/admin/films/create', component: FilmsCreate, name: 'createFilm'},
    {path: '/admin/films/edit/:id', component: FilmsEdit, name: 'editFilm'},
    {path: '/admin/films/about/:id', component: FilmsAbout, name: 'aboutFilm'},
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')
