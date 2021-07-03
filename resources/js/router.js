import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Main from "./views/Main.vue"
import Goods from "./views/Goods.vue"
import Basket from "./views/Basket.vue"

const routes = [
    { path: '/', component: Main },
    { path: '/goods', component: Goods },
    { path: '/basket', component: Basket },
]
export default new VueRouter ({
    mode: "history",
    routes
})
