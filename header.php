<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package talento
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

  <link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/img/icons/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/img/icons/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/img/icons/favicon/favicon-16x16.png" />
  <link rel="manifest" href="<?= get_template_directory_uri(); ?>/img/icons/favicon/site.webmanifest" />



  <?php wp_head(); ?>
  
  <link rel="stylesheet" href="<?= __DIR; ?>/libs/swiper/swiper-bundle.min.css" defer />
  <link rel="stylesheet" href="<?= __DIR; ?>/libs/lity/dist/lity.css" defer />
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <nav class="top-navbar px-4 px-lg-0 shadow-0">
    <div class="row g-0 h-100">
			<div class="col-sm-6 col-md-6 col-lg-2 col-xxl-2 offset-lg-1 offset-xxl-2 h-100">
				<a class="logo-link" href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>">
					<div class="nav-logo float-left <?php if ( !is_front_page() ) echo 'fixed-logo'; ?>"></div>
				</a>
			</div>
		
			<div class="col-12 col-sm-6 col-md-6 col-lg-8 col-xxl-6 h-100">
				<ul class="nav-menu float-right">
					<li class="nav-link">
						<a href="<?php bloginfo( 'url' ); ?>" class="js-splash-text text-middle text-center">Home</a>
					</li>

					<li class="nav-link">
						<a href="<?php bloginfo( 'url' ); ?>/portfolio" class="js-splash-text text-middle text-center">Portfólio</a>
					</li>

					<li class="nav-link">
						<a href="<?php bloginfo( 'url' ); ?>/sobre" class="js-splash-text text-middle text-center">Quem somos</a>
					</li>

					<li class="nav-btn">
						<a href="<?php bloginfo( 'url' ); ?>/contato" class="js-splash-text text-middle text-center white-text">Fazer orçamento</a>
					</li>

					<li class="display-flex margin-left-medium">
						<a href="https://facebook.com/talentodesignmarketing" class="js-splash-text text-center padding-x-smaller text-medium tooltipped" data-tooltip="Facebook">
							<i class="fab fa-facebook"></i>
						</a>

						<a href="https://instagram.com/talentodesignmkt" class="js-splash-text text-center padding-x-smaller text-medium tooltipped" data-tooltip="Instagram">
							<i class="fab fa-instagram"></i>
						</a>

						<a href="https://behance.net/talentodesign" class="js-splash-text text-center padding-x-smaller text-medium tooltipped" data-tooltip="Behance">
							<i class="fab fa-behance"></i>
						</a>
					</li>
				</ul>
			</div>
    </div>
  </nav>



  <ul id="slide-out" class="sidenav">
    <li>
      <a href="<?php bloginfo( 'url' ); ?>" class="text-middle">Home</a>
    </li>

    <li>
      <a href="<?php bloginfo( 'url' ); ?>/portfolio" class="text-middle">Portfólio</a>
    </li>

    <li>
      <a href="<?php bloginfo( 'url' ); ?>/sobre" class="text-middle">Quem somos</a>
    </li>

    <li class="button-bg">
      <a href="<?php bloginfo( 'url' ); ?>/contato" class="text-middle white-text">Faça um orçamento</a>
    </li>

    <li class="display-flex">
      <a href="https://facebook.com/talentodesignmarketing/" class="white text-center margin-right-smaller padding-right-smaller text-large tooltipped" data-tooltip="Facebook">
        <i class="fab fa-facebook no-margin"></i>
      </a>

      <a href="https://instagram.com/talentodesignmkt/" class="white text-center margin-right-smaller no-padding-left padding-right-smaller text-large tooltipped" data-tooltip="Instagram">
        <i class="fab fa-instagram no-margin"></i>
      </a>

      <a href="https://behance.net/talentodesign" class="white text-center margin-right-smaller no-padding-left text-large tooltipped" data-tooltip="Behance">
        <i class="fab fa-behance no-margin"></i>
      </a>
    </li>
  </ul>


  <a href="#" data-target="slide-out" class="mobile-menu-btn sidenav-trigger waves-effect">
    <i class="fas fa-bars"></i>
  </a>

  <noscript id="js_disabled_message">
    <div class="fullscreen gradient-bg" style="z-index: 1000">
      <div class="center padding-medium text-center">
        Esse site requer o JavaScript habilitado para funcionar.
        <br>
        <a href="https://enable-javascript.com/pt/" target="_blank" rel="nofollow noreferrer">Como habilitar?</a>
      </div>
    </div>
    <script>
    document.querySelector('#js_disabled_message').style.display = 'none';
    </script>
  </noscript>
