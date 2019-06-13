<template>
  <main />
</template>

<script>
export default {
  fetch({ store }) {
    store.dispatch('page/setTitle', 'News')
    store.dispatch('page/setType', 'single-page')
    store.dispatch('page/setBackground', 'news-bg.png')
    store.dispatch('page/setBreadcrumbs', [
      {
        name: 'Home',
        route: 'index',
        active: true
      },
      {
        name: 'News',
        route: 'news'
      }
    ])
  }
}
</script>
