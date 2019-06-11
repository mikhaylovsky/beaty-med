export const state = () => ({
  slides: [],
  options: {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: render(1, 'test')
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  }
})

const render = (index, className) => {
  return '<span class="' + className + '">0' + (index + 1) + '</span>'
}

export const getters = {
  getSlides(state) {
    return state.slides
  },
  getOptions(state) {
    console.log(state.options.pagination)
    return state.options
  }
}

export const mutations = {
  setSlides(state, slides) {
    state.slides = slides
  },
  setOptions(state, options) {
    // state.options = { ...state.options, ...options }
    state.options = options
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
