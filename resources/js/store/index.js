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
    updateBasket(state, status) {
        state.statusBasket = status
    },
    updateBasketFalse(state) {
        state.statusBasket = false
    },
  },
  actions: {
        axiosGoods(ctx) {
            axios.get('/api/goods').then((res) => ctx.commit('updateGoods', res.data))
        },
        axiosBasket(ctx, id) {
            axios.post('/api/basket', {good_id: id}).then((res) => ctx.commit('updateBasket', res.data))
        },
        setFalseBasket(ctx) {
            ctx.commit('updateBasketFalse')
        },
  },
  getters: {
      allGoods(state){
          return state.goods
      },
      checkStatusBasket(state){
        return state.statusBasket
    },
    //   StatusBasket(state){
    //     return state.statusBasket
    // },
  }
})
