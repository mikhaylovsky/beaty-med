<template>
  <div class="our-departments">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="our-departments-wrap">
            <h2>Our Departments</h2>

            <div class="row">
              <Service v-for="service in services" :key="service.id" :service="service" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Service from '~/components/Services/ServiceComponent'

export default {
  components: {
    Service
  },
  data() {
    return {
      services: []
    }
  },
  created() {
    this.services = [
      {
        id: 1,
        icon: '/images/services/cardiogram.png',
        title: 'Cardiology',
        content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.'
      },
      {
        id: 2,
        icon: '/images/services/cardiogram.png',
        title: 'Cardiology',
        content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.'
      },
      {
        id: 3,
        icon: '/images/services/cardiogram.png',
        title: 'Cardiology',
        content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.'
      }
    ]
  }
}
</script>
