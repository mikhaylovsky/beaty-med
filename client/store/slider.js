export const state = () => ({
  slides: [],
  options: {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  }
})

export const getters = {
  getSlides(state) {
    return state.slides
  },
  getOptions(state) {
    return state.options
  }
}

export const mutations = {
  setSlides(state, slides) {
    state.slides = slides
  },
  setOptions(state, options) {
    state.options = { ...state.options, ...options }
  }
}

export const actions = {
  setSlides({ commit }, slides) {
    commit('setSlides', slides)
  },
  setOptions({ commit }, options) {
    commit('setOptions', options)
  }
}
