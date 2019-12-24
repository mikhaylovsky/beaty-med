<template>
  <div class="the-news">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>The News</h2>

          <div class="row">
            <BlogPost v-for="post in posts" :key="post.id" :post="post" :cols="3" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import BlogPost from '~/components/Blog/PostComponent'

export default {
  components: {
    BlogPost
  },
  data() {
    return {
      posts: []
    }
  },
  created() {
    this.posts = [
      {
        id: 1,
        image: '/images/blog/news-1.png',
        date: '05/05/2019',
        title: 'The awesome news',
        slug: 'the-awesome-news',
        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores aut cum cupiditate fuga fugit incidunt minima nobis provident quibusdam?'
      },
      {
        id: 2,
        image: '/images/blog/news-2.png',
        date: '12/05/2019',
        title: 'The awesome news 2',
        slug: 'the-awesome-news-2',
        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores aut cum cupiditate fuga fugit incidunt minima nobis provident quibusdam?'
      },
      {
        id: 3,
        image: '/images/blog/news-3.png',
        date: '19/05/2019',
        title: 'The awesome news 3',
        slug: 'the-awesome-news-3',
        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores aut cum cupiditate fuga fugit incidunt minima nobis provident quibusdam?'
      }
    ]
  }
}
</script>
