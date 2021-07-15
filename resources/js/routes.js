//import {createWebHistory,createRouter} from 'vue-router'
import Vue from 'vue'
import VueRouter from 'vue-router'

import login from "./components/login.vue";
import signup from "./components/signup.vue";
import home from "./components/home.vue";
import aboutus from "./components/aboutus.vue";
import contactus from "./components/contactus.vue";
import product from "./components/product.vue";
import productdetails from "./components/productdetails.vue";

export default {
    routes: [
        {
            name: 'login',
            path: '/login',
            component: login,
            meta: {
                requiresAuth: false,
            },
        },
        {
            name: 'signup',
            path: '/signup',
            component: signup,
            meta: {
                requiresAuth: false,
            },
        },
        {
            name: 'home',
            path: '/home',
            component: home,
            meta: {
                requiresAuth: true,
            },
        },
        {
            name: 'aboutus',
            path: '/aboutus',
            component: aboutus,
            meta: {
                requiresAuth: true,
            },
        },
        {
            name: 'contactus',
            path: '/contactus',
            component: contactus,
            meta: {
                requiresAuth: true,
            },
        },
        {
            name: 'product',
            path: '/product',
            component: product,
            meta: {
                requiresAuth: true,
            },
        },
        {
            name: 'productdetails',
            path: '/productdetails/:id',
            component: productdetails,
            meta: {
                requiresAuth: true,
            },
        },


    ]

}
/*const router= createRouter({
    history:createWebHistory(),
    routes
});*/

/*router.beforeEach((to, from, next) => {
    if(to.matched.some(record => record.meta.requiresAuth)) {
        if (localStorage.getItem('isAuth') == 'true') {
            next()
            return
        }
        next('/')
    } else {
        next()
    }
})*/

//export default router;
