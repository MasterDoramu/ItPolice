import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios';

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    goods: [],
    basket: [],
    statusBasket: false
  },
  mutations: {
    updateGoods(state, goods) {
        state.goods = goods
    },
    updateBasketStatus(state, status) {
        state.statusBasket = status
    },
    updateBasketFalse(state) {
        state.statusBasket = false
    },
    updateBasket(state, basket) {
        state.basket = basket
    },
  },
  actions: {
    axiosGoods(ctx) {
        axios.get('/api/goods').then((res) => ctx.commit('updateGoods', res.data))
    },
    insertBasket(ctx, id) {
        axios.post('/api/basket', {good_id: id}).then((res) => ctx.commit('updateBasketStatus', res.data))
    },
    setFalseBasket(ctx) {
        ctx.commit('updateBasketFalse')
    },
    axiosBasket(ctx) {
        axios.get('/api/basket').then((res) => ctx.commit('updateBasket', res.data))
    },
    deleteBasket(ctx, id) {
        axios.delete('/api/basket/' + id)
    },
  },
  getters: {
    allGoods(state){
        return state.goods
    },
        checkStatusBasket(state){
        return state.statusBasket
    },
    allBasket(state){
        return state.basket
    },
  }
})
