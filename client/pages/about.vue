<template>
  <main></main>
</template>

<script>
export default {
  fetch({ store }) {
    store.dispatch('page/setTitle', 'About Us')
    store.dispatch('page/setType', 'single-page')
    store.dispatch('page/setBackground', 'about-bg.png')
    store.dispatch('page/setBreadcrumbs', [
      {
        name: 'Home',
        route: 'index',
        active: true
      },
      {
        name: 'About Us',
        route: 'about'
      }
    ])
  }
}
</script>
