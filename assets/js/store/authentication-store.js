import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)
import axios from 'axios';
export const store = new Vuex.Store({
    state: {
        authenticated: false,
        token: localStorage.getItem('token') || '',
    },
    mutations: {
        change (state, value) {
            state.authenticated = value
        },
        token (state, token) {
            state.token = token
        },

        destroyToken(state) {
            state.token = null
        }
    },
    getters: {
        isAuthenticated: state => {
            if (state.authenticated === 'true' || state.authenticated === true) {
                return true
            }
            return false
        },

       /* isAuthenticated(state) {
            return state.token != null
        },
*/
       /* setToken(state, payload) {
            state.token = payload
            localStorage.setItem("token", payload)
        },
        clearToken(state) {
            state.token = null
            localStorage.removeItem("token")
        },*/
        getToken: state => {
            return  state.token
        }
    },
    actions: {
        destroyToken(context) {
            console.log('destroy here');
            if (context.getters.isAuthenticated) {
                return new Promise((resolve, reject) => {
                    axios
                        .post('/logout')
                        .then(response => {
                            localStorage.removeItem('token')
                            context.commit('destroyToken')
                            resolve(response)
                            // console.log(response);
                            // context.commit('addTodo', response.data)
                        })
                        .catch(error => {
                            localStorage.removeItem('token')
                            context.commit('destroyToken')
                            reject(error)
                        })
                })
            }
        },
        }

})