<template>
  <div>
    <header class="site-header">
      <NavBar />

      <no-ssr>
        <Slider v-if="slides.length" :slides="slides" :options="options" />
      </no-ssr>
    </header>

    <nuxt />
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import NavBar from '~/components/NavBarComponent'
import Slider from '~/components/SliderComponent'

export default {
  components: {
    NavBar,
    Slider
  },
  computed: mapGetters({
    slides: 'slider/getSlides',
    options: 'slider/getOptions'
  })
}
</script>
