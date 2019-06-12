<template>
  <main />
</template>

<script>
export default {
  fetch({ store }) {
    store.dispatch('slider/setSlides', [
      {
        id: 1,
        url: '/images/slide.jpg',
        title: 'The Best <br> Medical Services',
        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis deleniti dolores esse expedita ipsum nemo pariatur praesentium quae quibusdam!',
        route: 'services'
      },
      {
        id: 2,
        url: '/images/slide.jpg',
        title: 'The Best <br> Medical Services',
        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis deleniti dolores esse expedita ipsum nemo pariatur praesentium quae quibusdam!',
        route: 'services'
      }
    ])

    store.dispatch('slider/setOptions', {
      renderPagination: true
    })

    store.dispatch('page/setTitle', 'Home')
    store.dispatch('page/setType', 'main-page')
    store.dispatch('page/setBackground', '')
    store.dispatch('page/setBreadcrumbs', [])
  }
}
</script>
