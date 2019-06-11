<template>
  <div>
    <header class="site-header">
      <NavBar />
    </header>

    <nuxt />
  </div>
</template>

<script>
import NavBar from '~/components/NavBarComponent'

export default {
  components: {
    NavBar
  }
}
</script>
