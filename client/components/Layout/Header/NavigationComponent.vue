<template>
  <nav class="site-navigation d-flex justify-content-end align-items-center">
    <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
      <li>
        <nuxt-link :to="{ name: 'index' }" exact>
          {{ $t('layout.header.navigation.home') }}
        </nuxt-link>
      </li>
      <li>
        <nuxt-link :to="{ name: 'about' }">
          {{ $t('layout.header.navigation.about') }}
        </nuxt-link>
      </li>
      <li>
        <nuxt-link :to="{ name: 'services' }">
          {{ $t('layout.header.navigation.services') }}
        </nuxt-link>
      </li>
      <li>
        <nuxt-link :to="{ name: 'blog-category-page' }">
          {{ $t('layout.header.navigation.news') }}
        </nuxt-link>
      </li>
      <li>
        <nuxt-link :to="{ name: 'contact' }">
          {{ $t('layout.header.navigation.contact') }}
        </nuxt-link>
      </li>

      <li class="call-btn button gradient-bg mt-3 mt-md-0">
        <a class="d-flex justify-content-center align-items-center" href="tel:+380507788892">
          <img src="~assets/images/emergency-call.png" alt="telephone">
          +38 050 778 8892
        </a>
      </li>
    </ul>

    <div class="hamburger-menu d-lg-none">
      <span />
      <span />
      <span />
      <span />
    </div>
  </nav>
</template>

<script>
export default {
  mounted() {
    const menu = document.querySelector('.hamburger-menu')

    menu.addEventListener('click', () => {
      menu.classList.toggle('open')
      document.querySelector('.site-navigation').classList.toggle('show')
    })
  }
}
</script>
