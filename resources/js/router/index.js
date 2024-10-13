import { createRouter, createWebHashHistory } from "vue-router";
import HomePage from "../views/HomePage.vue";
import Layout from "../components/Layout.vue";
import DetailsStoey from "../views/DetailsStoey.vue";
import FavoritesShort from "../views/FavoritesShort.vue";
import CatalogNoResulte from "../views/CatalogNoResulte.vue";
import Catalog from "../views/Catalog.vue";
import FavoritesNoResulte from "../views/FavoritesNoResulte.vue";
import ErrorPageGeral from "../views/ErrorPageGeral.vue";
import ErrorPage404 from "../views/ErrorPage404.vue";
import SuccessPage from "../views/SuccessPage.vue";
import Register from "../views/Auth/Register.vue";
import Login from "../views/Auth/Login.vue";
const routes = [
    {
        path: '/',
        component: Layout,
        children: [
            {
                path: '/',
                name: 'homePage',
                component: HomePage,
            },
            {
                path: '/login',
                name: "Login",
                component: Login
            },
            {
                path: '/register',
                name: "Register",
                component: Register
            },
            {
                path: '/details-story/:id?',
                name: 'detailsStory',
                component: DetailsStoey,
            },
            {
                path: '/favorites-short',
                name: 'FavoritesShort',
                component: FavoritesShort
            },
            {
                path: '/catalog',
                name: 'Catalog',
                component: Catalog
            },
            {
                path: '/catalog-no-resulte',
                name: 'CatalogNoResulte',
                component: CatalogNoResulte
            },
            {
                path: '/favorites-no-resulte',
                name: 'FavoritesNoResulte',
                component: FavoritesNoResulte
            },
            {
                path: '/success-page',
                name: 'SuccessPage',
                component: SuccessPage
            }
        ]

    },


    {
        path: '/error-page-geral',
        name: 'ErrorPageGeral',
        component: ErrorPageGeral
    },
    {
        path: '/error-page-404',
        name: 'ErrorPage404',
        component: ErrorPage404
    }
];

const router = createRouter({
    history: createWebHashHistory(),
    routes
})
export default router;
