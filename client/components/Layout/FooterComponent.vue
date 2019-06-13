<template>
  <footer class="site-footer">
    <div class="footer-widgets">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="foot-about">
              <h2>
                <nuxt-link :to="{ name: 'index' }">
                  <img src="~assets/images/logo.png" alt="">
                </nuxt-link>
              </h2>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>

              <p class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true" /> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div><!-- .foot-about -->
          </div><!-- .col -->

          <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
            <div class="foot-contact">
              <h2>Contact</h2>

              <ul class="p-0 m-0">
                <li><span>Addtress:</span>Mitlton Str. 26-27 London UK</li>
                <li><span>Phone:</span><a href="tel:+53345795332453">+53 345 7953 32453</a></li>
                <li><span>Email:</span><a href="mailto:yourmail@gmail.com">yourmail@gmail.com</a></li>
              </ul>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
            <div class="foot-links">
              <h2>Usefull Links</h2>

              <ul class="p-0 m-0">
                <li>
                  <nuxt-link :to="{ name: 'index' }">
                    Home
                  </nuxt-link>
                </li>
                <li>
                  <nuxt-link :to="{ name: 'about' }">
                    About us
                  </nuxt-link>
                </li>
                <li>
                  <nuxt-link :to="{ name: 'services' }">
                    Services
                  </nuxt-link>
                </li>
                <li>
                  <nuxt-link :to="{ name: 'news' }">
                    News
                  </nuxt-link>
                </li>
                <li>
                  <nuxt-link :to="{ name: 'contact' }">
                    Contact
                  </nuxt-link>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>
