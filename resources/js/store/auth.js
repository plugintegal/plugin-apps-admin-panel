import $axios from '../api.js'

const state = () => ({

})

const mutations = {

}
const actions = {
    submit({ commit }, payload) {
        localStorage.setItem('api_token', null)
        commit('SET_TOKEN', null, { root: true })

        return new Promise((resolve, reject) => {
            $axios.post('/login', payload).then((response) => {
                if (response.status == 'success') {
                    localStorage.setItem('api_token', response.results)
                    commit('SET_TOKENS', response.results, { root: true })
                } else {
                    commit('SET_ERRORS', { invalid: 'Member ID/Password Salah' }, { root: true })
                }
                resolve(response.data)
            }).catch((error) => {
                if (error.response.status == 422) {
                    commit('SET_ERRORS', error.response.errors, { root: true })
                }
            })
        })
    }
}

export default {
    namespaced: true,
    state,
    actions,
    mutations
}