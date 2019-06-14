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
                  <nuxt-link :to="{ name: 'news-index' }" exact>
                    All
                  </nuxt-link>
                </li>
                <li v-for="category in categories" :key="category.id">
                  <nuxt-link :to="{ name: 'news-index-categories-slug', params: { slug: category.slug } }">
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

export default {
  components: {
    WorkingHoursBox,
    EmergencyBox
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
  }
}
</script>
