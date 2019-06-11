<template>
  <nav class="site-navigation d-flex justify-content-end align-items-center">
    <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
      <li class="current-menu-item">
        <nuxt-link :to="{ name: 'index' }">
          Home
        </nuxt-link>
      </li>
      <li>
        <nuxt-link :to="{ name: 'about' }">
          About us
        </nuxt-link>
      </li>
      <li>
        <nuxt-link :to="{ name: 'services' }">
          Services
        </nuxt-link>
      </li>
      <li>
        <nuxt-link :to="{ name: 'news' }">
          News
        </nuxt-link>
      </li>
      <li>
        <nuxt-link :to="{ name: 'contact' }">
          Contact
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
