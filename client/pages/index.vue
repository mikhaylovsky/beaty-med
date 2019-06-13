<template>
  <main>
    <div class="homepage-boxes">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <WorkingHoursBox />
          </div>

          <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
            <EmergencyBox />
          </div>

          <div class="col-12 col-md-6 col-lg-5 mt-5 mt-lg-0">
            <AppointmentBox />
          </div>
        </div>
      </div>
    </div>

    <Departments />

    <Testimonials />

    <LatestBlogPosts />
  </main>
</template>

<script>
import WorkingHoursBox from '~/components/Common/WorkingHoursBoxComponent'
import EmergencyBox from '~/components/Common/EmergencyBoxComponent'
import AppointmentBox from '~/components/Common/AppointmentBoxComponent'
import Departments from '~/components/Services/DepartmentsComponent'
import Testimonials from '~/components/Testimonials/TestimonialsComponent'
import LatestBlogPosts from '~/components/Blog/LatestPostsComponent'

export default {
  components: {
    WorkingHoursBox,
    EmergencyBox,
    AppointmentBox,
    Departments,
    Testimonials,
    LatestBlogPosts
  },
  fetch({ store }) {
    store.dispatch('slider/setSlides', [
      {
        id: 1,
        url: '/images/slide.jpg',
        title: 'The Best <br> Medical Services',
        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis deleniti dolores esse expedita ipsum nemo pariatur praesentium quae quibusdam!',
        route: 'services'
      },
      {
        id: 2,
        url: '/images/slide.jpg',
        title: 'The Best <br> Medical Services',
        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis deleniti dolores esse expedita ipsum nemo pariatur praesentium quae quibusdam!',
        route: 'services'
      }
    ])

    store.dispatch('slider/setOptions', {
      renderPagination: true
    })

    store.dispatch('page/setTitle', 'Home')
    store.dispatch('page/setType', 'main-page')
    store.dispatch('page/setBackground', '')
    store.dispatch('page/setBreadcrumbs', [])
  }
}
</script>
