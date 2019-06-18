<template>
  <div class="the-news">
    <div class="row">
      <BlogPost v-for="post in posts" :key="post.id" :post="post" />

      <!--<Pagination :countItems="85" :perPage="4" :currentPage="5" />-->
    </div>
  </div>
</template>

<script>
import BlogPost from '~/components/Blog/PostComponent'
export default {
  name: 'GridComponent',
  components: {
    BlogPost
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
      },
      {
        id: 4,
        image: '/images/blog/news-4.png',
        date: '05/05/2019',
        title: 'The awesome news 4',
        slug: 'the-awesome-news-4',
        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores aut cum cupiditate fuga fugit incidunt minima nobis provident quibusdam?'
      },
      {
        id: 5,
        image: '/images/blog/news-5.png',
        date: '12/05/2019',
        title: 'The awesome news 5',
        slug: 'the-awesome-news-5',
        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores aut cum cupiditate fuga fugit incidunt minima nobis provident quibusdam?'
      },
      {
        id: 6,
        image: '/images/blog/news-6.png',
        date: '19/05/2019',
        title: 'The awesome news 6',
        slug: 'the-awesome-news-6',
        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores aut cum cupiditate fuga fugit incidunt minima nobis provident quibusdam?'
      }
    ]

    if (Object.entries(this.$route.params).length !== 0) {
      switch (this.$route.params.category) {
        case 'radiology':
          this.posts = this.posts.slice(0, 1)
          break
        case 'cardiology':
          this.posts = this.posts.slice(1, 2)
          break
        case 'gastroenterology':
          this.posts = this.posts.slice(2, 3)
          break
        case 'neurology':
          this.posts = this.posts.slice(3, 4)
          break
        case 'general-surgery':
          this.posts = this.posts.slice(4, 5)
          break
        default:
          break
      }
    }
  }
}
</script>
