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

<footer class="site-footer">
  <div class="container-medium">
    <div class="row no-margin padding-bottom-large wow fadeIn" data-wow-delay=".2s">
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

    </div>
  </div>

  <div class="footer-copyright padding-small primary-bg">
    <div class="container-medium row valign-wrapper">
      <div class="col s7 m11 no-padding-x">
        <a href="/" class="strong">Talento Design & Marketing</a> ® <?= date('Y'); ?>. Todos os direitos
        reservados.
      </div>

      <div class="valign-wrapper col s5 m1">
        <a href="https://talentodesign.com.br" class="tooltipped right" data-tooltip="Talento Design &amp; Marketing"
          data-position="left" target="_blank" rel="nofollow">
          <div class="attribution-logo"></div>
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
