
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
    // Manually add children to blog page for reactive filtration by categories
    extendRoutes(routes, resolve) {
      const index = routes.findIndex(route => route.name === 'blog-category-page')
      routes[index] = {
        path: routes[index].path,
        component: routes[index].component,
        children: [{
          path: '',
          component: resolve(__dirname, 'components/Blog/BlogGridComponent.vue'),
          name: routes[index].name
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
