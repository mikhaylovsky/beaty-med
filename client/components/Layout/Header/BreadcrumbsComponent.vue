<template>
  <div class="breadcrumbs">
    <ul class="d-flex flex-wrap align-items-center p-0 m-0">
      <li v-for="(breadcrumb, index) in breadcrumbs" :key="index">
        <nuxt-link v-if="breadcrumb.active" :to="{ name: breadcrumb.route }">
          {{ breadcrumb.name }}
        </nuxt-link>
        <span v-else>{{ breadcrumb.name }}</span>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    breadcrumbs: {
      type: Array,
      default() {
        return []
      }
    }
  }
}
</script>
