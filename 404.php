<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package talento
 */

get_header();
?>

<main id="primary" class="site-main background-blob wow fadeIn">

  <div class="block padding-y-larger">
    <div class="container-smaller">
      <h1 class="not-found-title text-center wow fadeInUpSmall" data-wow-delay=".2s">
        404
      </h1>

      <div class="not-found-image wow fadeInUpSmall" data-wow-delay=".3s"></div>

      <h4 class="page-subtitle text-center wow fadeInUpSmall" data-wow-delay=".5s">
        A página que você procurou não existe. 😕
      </h4>

      <p class="text-center wow fadeInUpSmall" data-wow-delay=".7s">
        <a href="/">Voltar para a Página Inicial?</a>
      </p>

    </div>
  </div>

</main><!-- #main -->

<?php
get_footer();
