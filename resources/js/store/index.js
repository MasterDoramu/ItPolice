import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios';

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    goods: []
  },
  mutations: {
    updateGoods(state, goods) {
        state.goods = goods
    }
  },
  actions: {
        axiosGoods(ctx) {
            axios.get('http://itpolice/api/goods').then((res) => ctx.commit('updateGoods', res.data))
        }
  },
  getters: {
      allGoods(state){
          return state.goods
      }
  }
})
