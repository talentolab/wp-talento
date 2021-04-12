<?php
/**
 * Template Name: About
 * @package talento
 */

get_header();
?>

<header class="margin-top-large">
  <div class="block">
    <div class="row no-padding valign-wrapper no-margin">
      <div class="col s12 m2 l3 hide-on-small-only"></div>

      <div class="col s12 m8 l6">
        <h1 class="padding-top-large padding-bottom-medium text-stronger text-center no-margin wow fadeInUpSmall accent-color">
          Completa e inovadora
        </h1>

        <div class="grey-text text-center padding-bottom-large wow fadeInUpSmall" data-wow-delay=".2s">
          A TALENTO desperta
          a sua motivação e criatividade!
        </div>
      </div>

      <div class="col s12 m2 l3 hide-on-small-only"></div>
    </div>
  </div>
</header>

  </div>

<div id="content" class="site-content gradient-bg">
  <div class="block">
    <div class="container-small padding-bottom-larger">
      <h1 class="page-title text-center wow fadeInUpSmall" data-wow-delay=".5s">
        <?php the_title(); ?>
      </h1>

      <h3 class="page-subtitle wow fadeInUpSmall" data-wow-delay=".7s">
        <?php the_excerpt(); ?>
      </h3>

      <?php 
        if ( have_posts() ) : 
          while ( have_posts() ) : 
            the_post();
            the_content();
          endwhile; 
        else : 
      ?>
      <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
              <div class="team-pic centered" style="background-image: url(<?= get_template_directory_uri(); ?>/img/sample/clients/1.webp);"></div>
    </div>
  </div>
</div>

<?php
get_footer();
