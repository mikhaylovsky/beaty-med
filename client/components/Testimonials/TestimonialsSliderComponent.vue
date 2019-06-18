<template>
  <div class="testimonial-slider">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-9">
          <div class="testimonial-bg-shape">
            <swiper :options="options" class="testimonial-slider-wrap">
              <swiper-slide v-for="slide in slides" :key="slide.id">
                <div class="entry-content">
                  <p>{{ slide.text }}</p>
                </div>

                <div class="entry-footer">
                  <figure class="user-avatar">
                    <img :src="slide.userAvatar" alt="">
                  </figure>

                  <h3 class="testimonial-user">
                    {{ slide.userName }} <span>{{ slide.userJob }}</span>
                  </h3>
                </div>
              </swiper-slide>
            </swiper>
            <div class="swiper-pagination-wrap">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="testimonials-swiper-pagination position-relative flex justify-content-center align-items-center" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
  }
}
</script>
