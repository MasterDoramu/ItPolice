import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Main from "./views/Main.vue"

const routes = [
    { path: '/', component: Main },
]
export default new VueRouter ({
    mode: "history",
    routes
})
