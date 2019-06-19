<template>
  <div :class="wrapClass">
    <div class="the-news-wrap">
      <figure class="post-thumbnail">
        <nuxt-link :to="{ name: 'blog-category-page', params: { slug: post.slug } }">
          <img :src="post.image" alt="">
        </nuxt-link>
      </figure>

      <div class="entry-header">
        <h3>{{ post.title }}</h3>

        <div class="post-metas d-flex flex-wrap align-items-center">
          <div class="posted-date">
            <label>Date: </label>
            <a href="javascript:void(0)">{{ post.date }}</a>
          </div>

          <div class="post-comments">
            <nuxt-link :to="{ name: 'blog-category-page', params: { slug: post.slug }, hash: '#comments' }">
              2 Comments
            </nuxt-link>
          </div>
        </div>
      </div>

      <div class="entry-content">
        <p v-html="post.content" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    post: {
      type: Object,
      default() {
        return {}
      }
    },
    cols: {
      type: Number,
      default: 2
    }
  },
  data() {
    return {
      wrapClass: ''
    }
  },
  created() {
    switch (this.cols) {
      case 1:
        this.wrapClass = 'col-12'
        break
      case 2:
      default:
        this.wrapClass = 'col-12 col-md-6'
        break
      case 3:
        this.wrapClass = 'col-12 col-md-6 col-lg-4'
        break
      case 4:
        this.wrapClass = 'col-12 col-md-6 col-lg-2'
        break
    }
  }
}
</script>
