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
    addBasket(state, status) {
        state.statusBasket = status
    },
    addBasketFalse(state) {
        state.statusBasket = false
    },
  },
  actions: {
        axiosGoods(ctx) {
            axios.get('/api/goods').then((res) => ctx.commit('updateGoods', res.data))
        },
        axiosBasket(ctx, id) {
            axios.post('/api/basket', {good_id: id}).then((res) => ctx.commit('addBasket', res.data))
        },
        setFalseBasket(ctx) {
            ctx.commit('addBasketFalse')
        },
  },
  getters: {
      allGoods(state){
          return state.goods
      },
      addStatusBasket(state){
        return state.statusBasket
    },
  }
})
