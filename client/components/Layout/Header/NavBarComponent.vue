<template>
  <div class="nav-bar">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
          <div class="site-branding d-flex align-items-center">
            <nuxt-link :to="{ name: 'index' }" class="d-block" rel="home">
              <img class="d-block" src="~assets/images/logo.png" alt="logo">
            </nuxt-link>
          </div>

          <Navigation />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Navigation from '~/components/Layout/Header/NavigationComponent'

export default {
  components: {
    Navigation
  }
}
</script>
