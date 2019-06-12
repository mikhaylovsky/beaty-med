export const state = () => ({
  title: '',
  type: 'single-page',
  breadcrumbs: [],
  background: ''
})

export const getters = {
  getTitle(state) {
    return state.title
  },
  getType(state) {
    return state.type
  },
  getBreadcrumbs(state) {
    return state.breadcrumbs
  },
  getBackground(state) {
    return state.background
  }
}

export const mutations = {
  setTitle(state, title) {
    state.title = title
  },
  setType(state, type) {
    state.type = type
  },
  setBreadcrumbs(state, breadcrumbs) {
    state.breadcrumbs = breadcrumbs
  },
  setBackground(state, background) {
    state.background = background
  }
}

export const actions = {
  setType({ commit }, type) {
    commit('setType', type)
  },
  setTitle({ commit }, title) {
    commit('setTitle', title)
  },
  setBreadcrumbs({ commit }, breadcrumbs) {
    commit('setBreadcrumbs', breadcrumbs)
  },
  setBackground({ commit }, background) {
    commit('setBackground', background)
  }
}
