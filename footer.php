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
	<div class="row no-margin h-100 padding-y-large px-5 px-lg-0">
		<div class="col-12 col-sm-5 col-md-4 col-lg-4 col-xxl-4 offset-lg-1 offset-xxl-2 padding-bottom-medium">
			<div class="h-100 align-middle">
				<div class="footer-logo"></div>

        <ul class="no-margin-x margin-top-medium">
          <li class="margin-bottom-small">Siga a Talento</li>

          <li class="display-flex">
            <a href="#" class="js-splash-text text-center padding-right-small text-large tooltipped" data-tooltip="Facebook">
              <i class="fab fa-facebook"></i>
            </a>

            <a href="#" class="js-splash-text text-center padding-right-small text-large tooltipped" data-tooltip="Instagram">
              <i class="fab fa-instagram"></i>
            </a>

            <a href="#" class="js-splash-text text-center padding-right-small text-large tooltipped" data-tooltip="LinkedIn">
              <i class="fab fa-linkedin"></i>
            </a>

            <a href="#" class="js-splash-text text-center padding-right-small text-large tooltipped" data-tooltip="Behance">
              <i class="fab fa-behance"></i>
            </a>
          </li>
        </ul>

        <ul class="no-margin-x no-margin-bottom margin-top-medium">
          <li class="margin-bottom-small text-truncate">
            <i class="fas fa-envelope-open margin-right-smaller accent-color"></i>
            contato@talentodesign.com.br
          </li>

          <li class="margin-bottom-small">
            <i class="fas fa-phone-alt margin-right-smaller accent-color"></i>
            (91) 98885-3173
            <span class="grey-text margin-x-smaller">|</span>
            (91) 3248-3173
          </li>
        </ul>
			</div>
		</div>

		<div class="col-12 col-sm-7 col-md-8 col-lg-6 col-xxl-4">
			<div class="info-section h-100 text-middle">
				<div class="text--grey">
          
          <ul class="no-margin-x no-margin-bottom margin-top-medium">
            <li class="margin-bottom-small">
              Conjunto Maguari, Al. 03, 35B - Coqueiro - Belém/PA
            </li>
          </ul>
					
					<div class="footer-menu">

						<?php
							wp_nav_menu(
								array(
									'menu' => 'Main Menu',
									'container_class' => '',
									'menu_class' => 'd-md-flex',
								)
							);
						?>
					</div>
				</div>
				
				<div>
					<a href="#" class="text--yellow">
						Voltar ao topo
						<i class="far fa-arrow-alt-circle-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="attribution bg--blue-darker">
		<div class="row no-margin h-100 px-5 px-lg-0">	
			<div class="col-12 col-lg-10 col-xxl-8 offset-lg-1 offset-xxl-2">
				<div class="row g-0 h-100">
					<div class="col-10 text-middle">
						<div class="text--white">
							<a href="<?php bloginfo( 'url' ); ?>">Talento Design & Marketing</a> <sub class="text-large text-lighter no-select">®</sub> <?= date('Y'); ?>. Todos os direitos reservados.
						</div>
					</div>

					<div class="col-2 text-middle">
						<a href="https://talentodesign.com.br" target="_blank" rel="nofollow noreferrer">
							<div class="talento-logo float-end" data-tippy-content="Talento Design & Marketing" data-tippy-placement="left"></div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>



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
