<template>
  <main></main>
</template>

<script>
export default {
  fetch({ store }) {
    store.dispatch('page/setTitle', 'Contact')
    store.dispatch('page/setType', 'single-page')
    store.dispatch('page/setBackground', 'contact-bg.png')
    store.dispatch('page/setBreadcrumbs', [
      {
        name: 'Home',
        route: 'index',
        active: true
      },
      {
        name: 'Contact',
        route: 'contact'
      }
    ])
  }
}
</script>
