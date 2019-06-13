<template>
  <div class="hero-slider">
    <swiper :options="options">
      <swiper-slide
        v-for="slide in slides"
        :key="slide.id"
        :style="{ backgroundImage: `url(${slide.url})` }"
        class="hero-content-wrap"
      >
        <div class="hero-content-overlay position-absolute w-100 h-100">
          <div class="container h-100">
            <div class="row h-100">
              <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                <div class="entry-header">
                  <h1 v-html="slide.title"></h1>
                </div>

                <div class="entry-content mt-4">
                  <p>{{ slide.description }}</p>
                </div>

                <div class="entry-footer d-flex flex-wrap align-items-center mt-4">
                  <nuxt-link :to="{ name: slide.route }" class="button gradient-bg">Read More</nuxt-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
    </swiper>
    <div class="pagination-wrap position-absolute w-100">
      <div class="swiper-pagination d-flex flex-row flex-md-column" />
    </div>
  </div>
</template>

<script>
export default {
  props: {
    slides: {
      type: Array,
      default() {
        return []
      }
    },
    options: {
      type: Object,
      default() {
        return {}
      }
    }
  },
  beforeMount() {
    const render = this.options.renderPagination || false
    if (render) {
      this.options.pagination.renderBullet = (index, className) => {
        return `<span class="${className}">0${(index + 1)}</span>`
      }
    }
  }
}
</script>
