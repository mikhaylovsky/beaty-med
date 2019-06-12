<template>
  <main />
</template>

<script>
export default {
  fetch({ store }) {
    store.dispatch('page/setTitle', 'Services')
    store.dispatch('page/setType', 'single-page')
    store.dispatch('page/setBackground', 'service-bg.png')
    store.dispatch('page/setBreadcrumbs', [
      {
        name: 'Home',
        route: 'index',
        active: true
      },
      {
        name: 'Services',
        route: 'services'
      }
    ])
  }
}
</script>
