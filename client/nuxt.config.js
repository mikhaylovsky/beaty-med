
export default {
  mode: 'universal',
  /*
  ** Headers of the page
  */
  head: {
    title: process.env.npm_package_name || '',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: process.env.npm_package_description || '' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },
  /*
  ** Customize the progress-bar color
  */
  loading: { color: '#ff0000' },
  /*
  ** Global CSS
  */
  css: [
    '@assets/css/style.css',
    '@assets/sass/main.sass'
  ],
  /*
  ** Plugins to load before mounting the App
  */
  plugins: [
    { src: '@plugins/vue-swiper.js', mode: 'client' }
  ],
  /*
  ** Nuxt.js modules
  */
  modules: [
    // Doc: https://axios.nuxtjs.org/usage
    'bootstrap-vue/nuxt',
    '@nuxtjs/axios',
    '@nuxtjs/eslint-module',
    '@nuxtjs/font-awesome'
  ],
  router: {
    extendRoutes(routes, resolve) {
      // const indexIndex = routes.findIndex(route => route.name === 'index')
      // let index = routes[indexIndex].children.findIndex(route => route.name === 'index-child-id')
      // routes[indexIndex].children[index] = {
      //   ...routes[indexIndex].children[index],
      //   components: {
      //     default: routes[indexIndex].children[index].component,
      //     left: resolve(__dirname, 'components/childLeft.vue')
      //   },
      //   chunkNames: {
      //     left: 'components/childLeft'
      //   }
      // }

      const index = routes.findIndex(route => route.name === 'blog-category-page')
      // const defaultComponent = routes[index].component
      routes[index] = {
        // ...routes[index],
        path: routes[index].path,
        component: routes[index].component,
        children: [{
          path: '',
          component: resolve(__dirname, 'components/GridComponent.vue'),
          name: routes[index].name
          // chunkNames: {
          //   grid: 'components/GridComponent'
          // }
        }]
      }
    }
  },
  /*
  ** Axios module configuration
  ** See https://axios.nuxtjs.org/options
  */
  axios: {
  },
  /*
  ** Build configuration
  */
  build: {
    vendor: [],

    /*
    ** You can extend webpack config here
    */
    extend(config, ctx) {
    }
  }
}
