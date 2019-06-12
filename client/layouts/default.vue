<template>
  <div :class="pageType">
    <header class="site-header">
      <NavBar />

      <no-ssr v-if="(pageType === 'main-page')">
        <Slider v-if="sliderSlides.length" :slides="sliderSlides" :options="sliderOptions" />
      </no-ssr>

      <div v-else class="container">
        <div class="row">
          <div class="col-12">
            <h1>{{ pageTitle }}</h1>

            <Breadcrumbs :breadcrumbs="pageBreadcrumbs" />
          </div>
        </div>
      </div>

      <img v-if="(pageType === 'single-page')" class="header-img" :src="`images/${pageBackground}`" alt="">
    </header>

    <nuxt />

    <NewsSubscription />

    <Footer />
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import NavBar from '~/components/NavBarComponent'
import Breadcrumbs from '~/components/BreadcrumbsComponent'
import Slider from '~/components/SliderComponent'
import NewsSubscription from '~/components/NewsSubscriptionComponent'
import Footer from '~/components/FooterComponent'

export default {
  components: {
    NavBar,
    Breadcrumbs,
    Slider,
    NewsSubscription,
    Footer
  },
  computed: mapGetters({
    pageTitle: 'page/getTitle',
    pageType: 'page/getType',
    pageBreadcrumbs: 'page/getBreadcrumbs',
    pageBackground: 'page/getBackground',
    sliderSlides: 'slider/getSlides',
    sliderOptions: 'slider/getOptions'
  })
}
</script>
