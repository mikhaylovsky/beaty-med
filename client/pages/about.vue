<template>
  <main>
    <div class="med-history">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-12 col-lg-6">
            <h2>MedArt History</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. </p>

            <a class="d-inline-block button gradient-bg" href="#">Read More</a>
          </div>

          <div class="col-12 col-lg-6 mt-5 mt-lg-0">
            <img class="responsive" src="~assets/images/about.jpg" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="faq-stuff">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Faq & Stuff</h2>
          </div>

          <div class="col-12 col-lg-6 mb-5 mb-lg-0">
            <div class="accordion-wrap type-accordion" role="tablist">
              <h3 v-b-toggle.accordion-1 variant="info" role="tab" class="entry-title d-flex justify-content-between align-items-center active">
                Elit mir congue ligula et efficitur pellentesqu<span class="arrow-d" />
              </h3>

              <b-collapse id="accordion-1" class="entry-content" visible accordion="my-accordion" role="tabpanel">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</p>
              </b-collapse>

              <h3 v-b-toggle.accordion-2 variant="info" role="tab" class="entry-title d-flex justify-content-between align-items-center">
                Pulvinar elit mi. Integer congue ligula et efficitur <span class="arrow-r" />
              </h3>

              <b-collapse id="accordion-2" class="entry-content" accordion="my-accordion" role="tabpanel">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</p>
              </b-collapse>

              <h3 v-b-toggle.accordion-3 variant="info" role="tab" class="entry-title d-flex justify-content-between align-items-center">
                Pellentesque pulvinar elit mi. Integer congue<span class="arrow-r" />
              </h3>

              <b-collapse id="accordion-3" class="entry-content" accordion="my-accordion" role="tabpanel">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</p>
              </b-collapse>
            </div>
          </div>

          <div class="col-12 col-lg-6 mt-5 mt-lg-0">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="professional-box">
                  <h2 class="d-flex align-items-center">
                    Professional
                  </h2>

                  <img src="~assets/images/cardiogram-2.png" alt="">

                  <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec males uada lorem.</p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="quality-box">
                  <h2 class="d-flex align-items-center">
                    Quality
                  </h2>

                  <img src="~assets/images/hospital.png" alt="">

                  <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec males uada lorem.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="medical-team">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>The Medical Team</h2>
          </div>

          <div class="col-12 col-md-6 col-lg-3">
            <div class="medical-team-wrap">
              <img src="~assets/images/team-1.jpg" alt="">

              <h4>Christinne Smith</h4>
              <h5>PHD Surgeon</h5>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
            <div class="medical-team-wrap">
              <img src="~assets/images/team-2.jpg" alt="">

              <h4>Anna Gustav</h4>
              <h5>PHD Surgeon</h5>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
            <div class="medical-team-wrap">
              <img src="~assets/images/team-3.jpg" alt="">

              <h4>Phillip Williams</h4>
              <h5>PHD Surgeon</h5>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
            <div class="medical-team-wrap">
              <img src="~assets/images/team-4.jpg" alt="">

              <h4>Gina James</h4>
              <h5>PHD Surgeon</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
export default {
  fetch({ store }) {
    store.dispatch('page/setTitle', 'About Us')
    store.dispatch('page/setType', 'single-page')
    store.dispatch('page/setBackground', 'about-bg.png')
    store.dispatch('page/setBreadcrumbs', [
      {
        name: 'Home',
        route: 'index',
        active: true
      },
      {
        name: 'About Us',
        route: 'about'
      }
    ])
  }
}
</script>
