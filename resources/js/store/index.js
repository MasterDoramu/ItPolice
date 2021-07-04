import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios';

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    goods: [],
    basket: []
  },
  mutations: {
    updateGoods(state, goods) {
        state.goods = goods
    },
    updateBasket(state, basket) {
        state.basket = basket
    }
  },
  actions: {
        axiosGoods(ctx) {
            axios.get('/api/goods').then((res) => ctx.commit('updateGoods', res.data))
        },
        axiosBasket(ctx, id) {
            axios.post('/api/basket', {good_id: id}).then((res) => ctx.commit('updateBasket', res.data))
        },
  },
  getters: {
      allGoods(state){
          return state.goods
      },
      allBasket(state){
        return state.basket
    },
  }
})
