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
          <nuxt-child :key="$route.params.category || 'default'" />
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import { mapGetters } from 'vuex'
import WorkingHoursBox from '~/components/Common/WorkingHoursBoxComponent'
import EmergencyBox from '~/components/Common/EmergencyBoxComponent'

export default {
  components: {
    WorkingHoursBox,
    EmergencyBox
  },

  data() {
    return {
      posts: []
    }
  },

  validate({ params }) {
    let valid = true

    if (params.page !== undefined) {
      valid = /^[1-9]([0-9]?)+$/.test(params.page)
    }

    return valid
  },

  computed: mapGetters({
    categories: 'blog/getCategories'
  }),

  fetch({ store, params }) {
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
    store.dispatch('page/setTitle', 'News')
    store.dispatch('page/setType', 'single-page')
    store.dispatch('page/setBackground', 'news-bg.png')

    const breadcrumbs = [
      {
        name: 'Home',
        route: 'index',
        active: true
      },
      {
        name: 'News',
        route: 'blog-category-page',
        active: params.category !== undefined
      }
    ]

    if (params.category !== undefined) {
      for (let i = 0; i < categories.length; i++) {
        if (categories[i].slug === params.category) {
          breadcrumbs.push({
            name: categories[i].title,
            route: 'blog-category-page',
            params: {
              category: categories[i].slug
            }
          })
        }
      }
    }

    store.dispatch('page/setBreadcrumbs', breadcrumbs)
  }
}
</script>
