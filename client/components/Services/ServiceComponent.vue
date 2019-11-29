<template>
  <div class="col-12 col-md-6 col-lg-4">
    <div class="our-departments-cont">
      <div class="entry-header d-flex flex-wrap align-items-center">
        <img :src="service.icon" alt="">
        <h3>{{ service.title }}</h3>
      </div>

      <div class="entry-content">
        <p v-html="service.content" />
      </div>

      <div class="entry-footer">
        <nuxt-link :to="{ name: 'services-id', params: { id: service.id } }">
          read more
        </nuxt-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    service: {
      type: Object,
      default() {
        return {}
      }
    }
  }
}
</script>
