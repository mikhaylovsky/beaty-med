<template>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-4">
          <div class="sidebar">
            <div class="sidebar-cats">
              <h2 class="widget-title">
                Categories
              </h2>

              <ul class="p-0 m-0">
                <li>
                  <nuxt-link :to="{ name: 'blog-category-page' }" exact>
                    All
                  </nuxt-link>
                </li>
                <li v-for="category in categories" :key="category.id">
                  <nuxt-link :to="{ name: 'blog-category-page', params: { category: category.slug } }">
                    {{ category.title }}
                  </nuxt-link>
                </li>
              </ul>
            </div>

            <WorkingHoursBox />

            <EmergencyBox />
          </div>
        </div>

        <div class="col-12 col-lg-8">
          <transition name="news-categories" mode="out-in">
            <nuxt-child />
          </transition>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import { mapGetters } from 'vuex'
import WorkingHoursBox from '~/components/Common/WorkingHoursBoxComponent'
import EmergencyBox from '~/components/Common/EmergencyBoxComponent'
// import BlogPost from '~/components/Blog/PostComponent'
// import Pagination from '~/components/Common/PaginationComponent'

export default {
  components: {
    WorkingHoursBox,
    EmergencyBox
    // BlogPost
  },
  data() {
    return {
      posts: []
    }
  },
  validate({ params }) {
    let valid = true

    if (params.page !== undefined) {
      valid = /^[1-9][0-9]+$/.test(params.page)
    }

    return valid
  },
  computed: mapGetters({
    categories: 'blog/getCategories'
  }),
  fetch({ store, params }) {
    store.dispatch('page/setTitle', 'News')
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
        route: 'news'
      }
    ])

    // async await axios get categories
    const categories = [
      {
        id: 1,
        title: 'Radiology',
        slug: 'radiology'
      },
      {
        id: 2,
        title: 'Cardiology',
        slug: 'cardiology'
      },
      {
        id: 3,
        title: 'Gastroenterology',
        slug: 'gastroenterology'
      },
      {
        id: 4,
        title: 'Neurology',
        slug: 'neurology'
      },
      {
        id: 5,
        title: 'General surgery',
        slug: 'general-surgery'
      }
    ]

    store.dispatch('blog/setCategories', categories)
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
