export const state = () => ({
  category: {},
  categories: [],
  post: {}
})

export const getters = {
  getCategory(state) {
    return state.category
  },
  getCategories(state) {
    return state.categories
  },
  getPost(state) {
    return state.post
  }
}

export const mutations = {
  setCategory(state, category) {
    state.category = category
  },
  setCategories(state, categories) {
    state.categories = categories
  },
  setPost(state, post) {
    state.post = post
  }
}

export const actions = {
  setCategory({ commit }, category) {
    commit('setCategory', category)
  },
  setCategories({ commit }, categories) {
    commit('setCategories', categories)
  },
  setPost({ commit }, post) {
    commit('setPost', post)
  }
}
