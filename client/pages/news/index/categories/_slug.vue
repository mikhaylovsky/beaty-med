<template>
  <div class="the-news">
    <div class="row">
      <BlogPost v-for="post in posts" :key="post.id" :post="post" />

      <div class="col-12">
        <ul class="pagination d-flex flex-wrap align-items-center justify-content-center p-0">
          <li class="active">
            <a href="#">01</a>
          </li>
          <li><a href="#">02</a></li>
          <li><a href="#">03</a></li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
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
  computed: mapGetters({
    category: 'blog/getCategory'
  }),
  fetch({ store, params }) {
    // here should be used async await axios get category information
    const category = {
      id: 4,
      title: 'Cardiology',
      slug: params.slug
    }

    store.dispatch('blog/setCategory', category)
    store.dispatch('page/setTitle', category.title)
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
        route: 'news',
        active: true
      },
      {
        name: category.title,
        route: 'news'
      }
    ])
  },
  created() {
    // asyncData method to get all posts from this category
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
