<template>
  <div :class="pageType">
    <header class="site-header">
      <NavBar />

      <client-only v-if="(pageType === 'main-page')">
        <Slider v-if="sliderSlides.length" :slides="sliderSlides" :options="sliderOptions" />
      </client-only>

      <div v-else class="container">
        <div class="row">
          <div class="col-12">
            <h1>{{ pageTitle }}</h1>

            <Breadcrumbs :breadcrumbs="pageBreadcrumbs" />
          </div>
        </div>
      </div>

      <img v-if="(pageType === 'single-page')" :src="`/images/${pageBackground}`" class="header-img" alt="">
    </header>

    <nuxt />

    <NewsSubscription />

    <Footer />
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import NavBar from '~/components/Layout/Header/NavBarComponent'
import Breadcrumbs from '~/components/Layout/Header/BreadcrumbsComponent'
import Slider from '~/components/Layout/Header/HeaderSliderComponent'
import NewsSubscription from '~/components/Common/NewsSubscriptionComponent'
import Footer from '~/components/Layout/FooterComponent'

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
