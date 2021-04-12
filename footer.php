<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package talento
 */

?>

<footer class="site-footer padding-top-large">
  <div class="container-large">
    <div class="row no-margin padding-bottom-large wow fadeIn" data-wow-delay=".2s">
      <div class="col s12 m6 l3 xl3">
        <div class="footer-logo"></div>


        <ul class="no-margin-x margin-top-medium">
          <li class="footer-links--title">Siga a Talento</li>

          <li class="display-flex">
            <a href="#" class="js-splash-text text-center padding-x-smaller text-large tooltipped" data-tooltip="Facebook">
              <i class="fab fa-facebook"></i>
            </a>

            <a href="#" class="js-splash-text text-center padding-x-smaller text-large tooltipped" data-tooltip="Instagram">
              <i class="fab fa-instagram"></i>
            </a>

            <a href="#" class="js-splash-text text-center padding-x-smaller text-large tooltipped" data-tooltip="LinkedIn">
              <i class="fab fa-linkedin"></i>
            </a>

            <a href="#" class="js-splash-text text-center padding-x-smaller text-large tooltipped" data-tooltip="Behance">
              <i class="fab fa-behance"></i>
            </a>
          </li>
        </ul>

        
      </div>

      <div class="col s6 m6 l3 xl3">
        <ul class="no-margin-x no-margin-bottom margin-top-medium">
          <li class="footer-links--title">Lorem Ipsum</li>
          <li>
            <a href="#!">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#!">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#!">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#!">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#!">Lorem Ipsum</a>
          </li>
        </ul>
      </div>

      <div class="col s6 m6 l3 xl3">
        <ul class="no-margin-x no-margin-bottom margin-top-medium">
          <li class="footer-links--title">Lorem Ipsum</li>
          <li>
            <a href="#!">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#!">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#!">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#!">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#!">Lorem Ipsum</a>
          </li>
        </ul>
      </div>

      <div class="col s12 m6 l3 xl3">
        <ul class="no-margin-x no-margin-bottom margin-top-medium">
          <li class="margin-bottom-small display-flex text-middle">
            <i class="fas fa-envelope-open margin-right-smaller accent-color"></i> contato@talentodesign.com.br
          </li>

          <li class="margin-bottom-small display-flex text-middle">
            <i class="fas fa-phone-alt margin-right-smaller accent-color"></i>
            (91) 98885-3173
            <span class="grey-text margin-x-smaller">|</span>
            (91) 3248-3173
          </li>

          <li class="margin-bottom-small display-flex">
            <i class="fas fa-map-marker-alt margin-right-smaller accent-color"></i> Conjunto Maguari, Al. 03, 35B - Coqueiro, Belém-PA
          </li>
        </ul>
      </div>

    </div>
  </div>

  <div class="footer-copyright padding-small primary-bg">
    <div class="container-large row valign-wrapper">
      <div class="col s7 m11 no-padding-x">
        <a href="/" class="strong">Talento Design & Marketing</a> ® <?= date('Y'); ?>. Todos os direitos
        reservados.
      </div>

      <div class="valign-wrapper col s5 m1">
        <a href="https://talentodesign.com.br" class="tooltipped right" data-tooltip="Talento Design &amp; Marketing"
          data-position="left" target="_blank" rel="nofollow">
          <div class="attribution-logo">
            <span class="no-display">Talento Design</span>
          </div>
        </a>
      </div>

    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
let wow = new WOW({
  mobile: false
});
wow.init();
</script>


<script src="<?= get_template_directory_uri(); ?>/libs/lity/dist/lity.js"></script>

<script type="module">
  import Swiper from '<?= get_template_directory_uri(); ?>/libs/swiper/swiper-bundle.esm.browser.min.js'

  const carousel = document.querySelectorAll('.swiper-container');
  const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    disableOnInteraction: false,

    autoplay: true,

    speed: 500,

    // Navigation arrows
    navigation: {
      nextEl: '.js-swiper-carousel-next',
      prevEl: '.js-swiper-carousel-prev',
    },
  });

  if (carousel.length > 0) {
    carousel[0].addEventListener('mouseleave', () => {
      swiper.autoplay.start()
    });
    
    carousel[0].addEventListener('mouseenter', () => {
      swiper.autoplay.stop();
    });
  }

</script>

</body>

</html>
