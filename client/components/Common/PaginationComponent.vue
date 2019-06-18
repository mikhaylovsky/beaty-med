<template>
  <div class="col-12">
    <ul class="pagination d-flex flex-wrap align-items-center justify-content-center p-0">
      <li class="prev">
        <a v-if="currentPage !== 1" href="#">
          <i class="fa fa-long-arrow-left" />
        </a>
      </li>
      <li v-for="n in countPages" :key="n" :class="{ active: (n === currentPage) }">
        <a href="#">
          <span v-if="n < 10">0</span><span>{{ n }}</span>
        </a>
      </li>
      <li class="next">
        <a href="#">
          <i class="fa fa-long-arrow-right" />
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    countItems: {
      type: Number,
      default() {
        return 0
      }
    },
    perPage: {
      type: Number,
      default() {
        return 6
      }
    },
    currentPage: {
      type: Number,
      default() {
        return 1
      }
    }
  },
  data() {
    return {
      countPages: 0
    }
  },
  created() {
    this.countPages = Math.ceil(this.countItems / this.perPage)
    // console.log(this.$route)
    const limit = this.currentPage + 3
    if (this.countPages > limit) {
      this.countPages = limit
    }
  },
  mounted() {
    // window.history.pushState({ id: 'blog-page' }, 'Page 2', this.$route.fullPath + this.currentPage)
    console.log(this.$route)
  }
}
</script>
