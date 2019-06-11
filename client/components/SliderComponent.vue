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
                  <h1>The Best <br>Medical Services</h1>
                </div>

                <div class="entry-content mt-4">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                </div>

                <div class="entry-footer d-flex flex-wrap align-items-center mt-4">
                  <a href="#" class="button gradient-bg">Read More</a>
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
  data() {
    return {
      swiperOptions: {
        slidesPerView: 1,
        spaceBetween: 0,
        // loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">0' + (index + 1) + '</span>'
          }
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        }
      }
    }
  },
  mounted() {
    console.log(this.options.pagination)
  }
}
</script>
