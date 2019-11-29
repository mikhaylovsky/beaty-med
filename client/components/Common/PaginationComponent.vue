<template>
  <div class="col-12">
    <ul class="pagination d-flex flex-wrap align-items-center justify-content-center p-0">
      <li class="prev">
        <nuxt-link
          v-if="currentPage !== 1"
          :to="{ name: 'blog-category-page', params: { category: $route.params.category || null, page: currentPage - 1 } }"
        >
          <i class="fa fa-long-arrow-left" />
        </nuxt-link>
      </li>
      <li v-for="n in pages" :key="n" :class="{ active: (n === currentPage) }">
        <nuxt-link :to="{ name: 'blog-category-page', params: { category: $route.params.category || null, page: n } }">
          <span v-if="n < 10">0</span><span>{{ n }}</span>
        </nuxt-link>
      </li>
      <li class="next">
        <nuxt-link
          v-if="currentPage !== lastPage"
          :to="{ name: 'blog-category-page', params: { category: $route.params.category || null, page: currentPage + 1 } }"
        >
          <i class="fa fa-long-arrow-right" />
        </nuxt-link>
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
      pages: [],
      lastPage: null
    }
  },
  created() {
    this.countPages = Math.ceil(this.countItems / this.perPage)
    const start = ((this.currentPage - 3) > 0) ? (this.currentPage - 3) : 1
    this.lastPage = ((this.currentPage + 3) < this.countPages) ? this.currentPage + 3 : this.countPages

    for (let i = start; i <= this.lastPage; i++) {
      this.pages.push(i)
    }
  }
}
</script>
