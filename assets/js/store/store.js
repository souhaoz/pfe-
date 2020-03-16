import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export const store = new Vuex.Store({
    state: {
        token: localStorage.getItem('token' || null)
    },
    mutations: {
        token (state, token) {
            state.token = token
        }
    },
    getters: {
        getToken: state => {
            return 'API-X-TOKEN ' + state.token
        }
    }
})