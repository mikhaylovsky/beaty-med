<template>
  <main>
    <div class="contact-page-short-boxes">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="contact-info h-100">
              <h2 class="d-flex align-items-center">
                {{ $t('contact.info') }}
              </h2>

              <ul class="p-0 m-0">
                <li><span>Addtress:</span>Mitlton Str. 26-27 London UK</li>
                <li><span>Phone:</span>+53 345 7953 32453</li>
                <li><span>Email:</span>yourmail@gmail.com</li>
              </ul>
            </div>
          </div>

          <div class="col-12 col-md-4 mt-5 mt-lg-0">
            <WorkingHoursBox />
          </div>

          <div class="col-12 col-md-4 mt-5 mt-lg-0">
            <EmergencyBox />
          </div>
        </div>
      </div>
    </div>

    <div class="contact-form">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Get in Touch</h2>
          </div>

          <div class="col-12  col-md-4">
            <input type="text" placeholder="Name">
          </div><!-- col-4 -->

          <div class="col-12 col-md-4">
            <input type="email" placeholder="E-mail">
          </div><!-- col-6 -->

          <div class="col-12 col-md-4">
            <input type="text" placeholder="Subject">
          </div>

          <div class="col-12">
            <textarea name="name" rows="12" cols="80" placeholder="Message" />
          </div>

          <div class="col-12">
            <input type="submit" name="" value="Send Message" class="button gradient-bg">
          </div>
        </div><!-- row -->
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="contact-page-map">
            <iframe
              id="gmap_canvas"
              src="https://maps.google.com/maps?q=university of san francisco&t=&z=15&ie=UTF8&iwloc=&output=embed"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
            />
          </div><!-- map -->
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import WorkingHoursBox from '~/components/Common/WorkingHoursBoxComponent'
import EmergencyBox from '~/components/Common/EmergencyBoxComponent'

export default {
  components: {
    WorkingHoursBox,
    EmergencyBox
  },

  fetch({ store }) {
    store.dispatch('page/setTitle', 'Contact')
    store.dispatch('page/setType', 'single-page')
    store.dispatch('page/setBackground', 'contact-bg.png')
    store.dispatch('page/setBreadcrumbs', [
      {
        name: 'Home',
        route: 'index',
        active: true
      },
      {
        name: 'Contact',
        route: 'contact'
      }
    ])
  }
}
</script>
