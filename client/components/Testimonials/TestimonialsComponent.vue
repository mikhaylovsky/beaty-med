<template>
  <section class="testimonial-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Pacient’s Testimonials</h2>
        </div>
      </div>
    </div>

    <no-ssr>
      <Slider :slides="testimonialsSliderSlides" :options="testimonialsSliderOptions" />
    </no-ssr>
  </section>
</template>

<script>
import Slider from '~/components/Testimonials/TestimonialsSliderComponent'

export default {
  components: {
    Slider
  },
  data() {
    return {
      testimonialsSliderSlides: [
        {
          id: 1,
          text: 'Test 1',
          userAvatar: '/images/testimonials-slider/user-1.jpg',
          userName: 'John Doe',
          userJob: 'UMA'
        },
        {
          id: 2,
          text: 'Test 2',
          userAvatar: '/images/testimonials-slider/user-2.jpg',
          userName: 'Jane Doe',
          userJob: 'UMC'
        },
        {
          id: 3,
          text: 'Test 3',
          userAvatar: '/images/testimonials-slider/user-3.jpg',
          userName: 'Johnie Doe',
          userJob: 'URP'
        },
        {
          id: 4,
          text: 'Test 4',
          userAvatar: '/images/testimonials-slider/user-4.jpg',
          userName: 'Jake Doe',
          userJob: 'PPE'
        }
      ],
      testimonialsSliderOptions: {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        effect: 'flip',
        flipEffect: {
          rotate: 30,
          slideShadows: false
        },
        speed: 800,
        pagination: {
          el: '.testimonials-swiper-pagination',
          clickable: true
        }
      }
    }
  }
}
</script>
