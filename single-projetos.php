<?php

$originationURL = $_POST['url'];

// Is not embeded
if ( $originationURL == '' ) {
  get_header();
  $background = 'bg--light-grey';
  $returnAction = 'location.href=\'/portfolio/\'';
}
else {
  $background = 'frost-glass-2 dark';
  $returnAction = '';
}

// Return an empty array if not set
$feat_color = CFS()->get( 'feat_color' ) ?? [];

?>

<header>
  <div class="project-cover margin-top-large animated fadeInDownSmall" style="background-color: <?= $feat_color; ?>; background-image: url(<?= CFS()->get( 'project_cover' ); ?>)">
  </div>
</header>

<main class="padding-bottom-large <?= $background; ?> animated fadeIn">
  <div class="row g-0 no-padding flex-on-med-and-up animated fadeInLeftSmall js-close-modal">
    <div class="col-md-1 d-none d-md-block js-close-modal">
      <div class="return-to-portfolio--wrapper position-sticky" onclick="<?= $returnAction; ?>">
        <div class="return-to-portfolio-btn js-close-modal" title="Voltar">
          <i class="fas fa-chevron-left center grey-text lighten-5"></i>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-5 col-lg-4 col-xl-3 js-close-modal">
      <aside class="overlap-top-larger position-sticky no-padding-x margin-bottom-small right" style="top: 72px;">
        <div class="padding-x-medium">
          <div class="card low-shadow portfolio-content--card border-radius-larger animated fadeInUpSmall">
            <div class="card-image animated fadeIn" style="background-image: url(<?= CFS()->get( 'client_logo' ); ?>)">
              <img src="<?= CFS()->get( 'client_logo' ); ?>" alt="Logo <?= the_title(); ?>" data-skip-lazy>
            </div>

            <div class="card-content padding-small">
              <h3 class="no-margin-top margin-bottom-medium" style="color: <?= $feat_color; ?>;">
                <?= get_the_title(); ?>
              </h3>

              <?php
                $branding_images = CFS()->get( 'branding_images' ) ?? [];
                $package_images = CFS()->get( 'package_images' ) ?? [];
                $signaling_images = CFS()->get( 'signaling_images' ) ?? [];
                $web_images = CFS()->get( 'web_images' ) ?? [];
                $videos = CFS()->get( 'videos' ) ?? [];
                $slogan_icon = CFS()->get( 'slogan_icon' ) ?? [];
                $slogan = CFS()->get( 'slogan' ) ?? [];

                class Chip {
                  public $icon;
                  public $featured_color;
                  public $name;
                  public $counter;
                }

                $branding_chip = new Chip();
                $branding_chip->counter = sizeof($branding_images);
                $branding_chip->icon = 'fingerprint';
                $branding_chip->name = 'Marca';
                $branding_chip->slug = 'branding';

                $package_chip = new Chip();
                $package_chip->counter = sizeof($package_images);
                $package_chip->icon = 'box-open';
                $package_chip->name = 'Embalagem';
                $package_chip->slug = 'package';

                $signaling_chip = new Chip();
                $signaling_chip->counter = sizeof($signaling_images);
                $signaling_chip->icon = 'store-alt';
                $signaling_chip->name = 'Sinalização';
                $signaling_chip->slug = 'signaling';

                $web_chip = new Chip();
                $web_chip->counter = sizeof($web_images);
                $web_chip->icon = 'code';
                $web_chip->name = 'Web';
                $web_chip->slug = 'web';

                $videos_chip = new Chip();
                $videos_chip->counter = sizeof($videos);
                $videos_chip->icon = 'video';
                $videos_chip->name = 'Vídeos';
                $videos_chip->slug = 'videos';

                $chips = array(
                  $branding_chip, $package_chip, $signaling_chip, $web_chip, $videos_chip
                );

                foreach ( $chips as $chip ) :
                  if ( $chip->counter > 0 ) :
              ?>
                <div class="chip no-select">
                  <i class="fas fa-<?= $chip->icon; ?> margin-right-smaller" style="color: <?= $feat_color; ?>;"></i>
                  <?= $chip->name; ?>
                </div>
              <?php
                  endif;
                endforeach;
              ?>

              <section>
                <div class="grey-text text-small margin-top-medium">Paleta</div>

                <div class="portfolio-content--color-palette display-flex no-scroll border-radius-large">
                  <?php
                    $colors = CFS()->get( 'colors' ) ?? [];
                    
                    foreach ( $colors as $color ) :
                  ?>
                      <div class="full-width tooltipped" data-tooltip="<?= $color['color_palette']; ?>" data-position="top" style="background-color: <?= $color['color_palette']; ?>"></div>
                  <?php
                    endforeach;
                  ?>
                </div>
              </section>
            </div>

            <div class="card-action padding-small">
              <a href="#" class="btn button-bg white-text full-width waves-effect waves-light" style="background-color: <?= $feat_color; ?>;">
                <i class="fas fa-check left"></i>
                Fazer um orçamento
              </a>
            </div>
          </div>
        </div>
      </aside>
    </div>

    <div class="col-12 col-md-7 col-lg-7 col-xxl-6 js-close-modal">
      <div class="margin-top-small no-padding position-sticky">
        <div class="no-padding-x">
          <div class="card low-shadow border-radius-large no-padding animated fadeInUpSmall">
            <div class="row g-0">
              <div class="col-sm-12 padding-large no-padding-bottom">
                <h1 class="margin-bottom-medium no-margin-top" style="color: <?= $feat_color; ?>">
                  <?php if ( isset( $slogan_icon ) ) : ?>
                    <i class="fas fa-<?= $slogan_icon; ?> grey-text text-lighten-2"></i>
                  <?php endif; ?>

                  <?= $slogan; ?>
                </h1>

                <div class="row g-0">
                  <div class="col-sm-12">
                    <?= get_the_content(); ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-action padding-medium valign-wrapper">
              <a href="" class="btn button-bg margin-right-medium" style="background-color: <?= $feat_color; ?>;">
                Website
              </a>

              <a href="" class="text-large" style="color: <?= $feat_color; ?>;">
                <i class="fab fa-facebook"></i>
              </a>

              <a href="" class="text-large" style="color: <?= $feat_color; ?>;">
                <i class="fab fa-instagram"></i>
              </a>

              <a href="" class="text-large" style="color: <?= $feat_color; ?>;">
                <i class="fab fa-twitter"></i>
              </a>

            </div>
          </div>
        </div>
        
        <div class="position-relative animated fadeInUpSmall">
          <ul class="tabs position-sticky light-grey-bg" style="top: 56px; z-index: 6">
            <style>
              .tabs .tab a {
                color: <?= $feat_color; ?>;
              }
              .tabs .tab a:hover,
              .tabs .tab a.active {
                color: <?= $feat_color; ?>;
              }
              .tabs .indicator {
                background-color: <?= $feat_color; ?>;
              }
            </style>

            <?php
              foreach ($chips as $chip) :
                  if ( $chip->counter > 0) :
            ?>
              <li class="tab">
                <a class="active text-stronger" href="#<?= $chip->slug; ?>">
                  <i class="fas fa-<?= $chip->icon; ?> margin-right-smaller"></i>
                  <?= $chip->name; ?>
                </a>
              </li>
            <?php
                endif;
              endforeach;
            ?>
          </ul>

          <div id="branding">
            <div class="portfolio-content--images overlap-bottom-small">
              <?php
                $images = CFS()->get( 'branding_images' ) ?? [];

                foreach ( $images as $image ) :
              ?>
                <img src="<?= $image['branding_image']; ?>" alt="Portfólio <?= get_the_title(); ?>" />
              <?php
                endforeach;
              ?>
            </div>
          </div>

          <div id="package">
            <div class="portfolio-content--images">
              <?php
                $loop = CFS()->get( 'package_images' ) ?? [];
                foreach ( $loop as $row ) {
                  echo '<img src="'. $row['package_image'] .'" alt="Portfólio '. get_the_title() .'" />';
                }
              ?>
            </div>
          </div>

          <div id="signaling">
            <div class="portfolio-content--images">
              <?php
                $loop = CFS()->get( 'signaling_images' ) ?? [];
                foreach ( $loop as $row ) {
                  echo '<img src="'. $row['signaling_image'] .'" alt="Portfólio '. get_the_title() .'" />';
                }
              ?>
            </div>
          </div>

          <div id="web">
            <div class="portfolio-content--images">
              <?php
                $loop = CFS()->get( 'web_images' ) ?? [];
                foreach ( $loop as $row ) {
                  echo '<img src="'. $row['web_image'] .'" alt="Portfólio '. get_the_title() .'" />';
                }
              ?>
            </div>
          </div>

          <div id="videos">
            <div class="portfolio-content--images">
              <?php
                $loop = CFS()->get( 'videos' ) ?? [];
                foreach ( $loop as $row ) {
                  echo '<img src="'. $row['video'] .'" alt="Portfólio '. get_the_title() .'" />';
                }
              ?>
            </div>
          </div>

          <div class="card low-shadow portfolio-content--related no-margin border-radius-large">
            <div class="card-content">
              
            </div>
            <div class="card-action">
              <?php
                $posttags = get_the_tags();

                if ($posttags) {
                  foreach($posttags as $tag) {
                    echo '<div class="chip">'. $tag->name . '</div>'; 
                  }
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-md-1 d-none d-lg-block no-padding js-close-modal"></div>
  </div>
</main>

<?php

  if ( $originationURL == '' ) {
    get_footer();
  }
?>