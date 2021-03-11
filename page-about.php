<?php
/**
 * Template Name: About
 * @package talento
 */

get_header();
?>

<div class="parallax-container large wow fadeIn" data-wow-delay=".2s">
  <div class="parallax">
    <img src="<?= get_template_directory_uri() .'/img/Portfolio_talento-2.jpg'; ?>" />
  </div>
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
    </div>
  </div>
</div>

<?php
get_footer();
