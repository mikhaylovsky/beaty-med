<template>
  <main />
</template>

<script>
import axios from 'axios'

export default {
  layout: 'main',
  async fetch({ store }) {
    const { data } = await axios.get('https://jsonplaceholder.typicode.com/photos')

    store.dispatch('slider/setSlides', data.slice(0, 5))
    // store.dispatch('slider/setOptions', {
    //   pagination: {
    //     el: '.swiper-pagination',
    //     clickable: true,
    //     renderBullet: function (index, className) {
    //       return '<span class="' + className + '">0' + (index + 1) + '</span>'
    //     }
    //   }
    // })
  }
}
</script>
