<?php
get_header();

$branding_images = CFS()->get( 'branding_images' );
$package_images = CFS()->get( 'package_images' );
$signaling_images = CFS()->get( 'signaling_images' );
$web_images = CFS()->get( 'web_images' );
$client_logo = CFS()->get( 'client_logo' );
$videos = CFS()->get( 'videos' );
$feat_color = CFS()->get( 'feat_color' );
$slogan_icon = CFS()->get( 'slogan_icon' );
$slogan = CFS()->get( 'slogan' );

$branding_images_length = $branding_images != '' ? sizeof($branding_images) : null;
$package_images_length = $package_images != '' ? sizeof($package_images) : null;
$signaling_images_length = $signaling_images != '' ? sizeof($signaling_images) : null;
$web_images_length = $web_images != '' ? sizeof($web_images) : null;
$videos_length = $videos != '' ? sizeof($videos) : null;
?>

<header class="light-grey-bg">
  <div class="project-cover margin-top-large" style="background-color: <?= $feat_color; ?>; background-image: url(<?= CFS()->get( 'project_cover' ); ?>">
  </div>
</header>

<main class="light-grey-bg">
  <div class="return-to-portfolio--wrapper">
    <a href="<?php bloginfo( 'siteurl' ); ?>/portfolio/">
      <div class="return-to-portfolio-btn" title="Voltar para o portfólio">
        <i class="material-icons center grey-text lighten-5 text-large">chevron_left</i>
      </div>
    </a>
  </div>

  <div class="row container-large">
    <aside class="overlap-top-larger position-sticky no-padding-x col s12 m5 l4 xl3" style="top: 72px;">
      <div class="row">
        <div class="col s8 m12 padding-x-medium">
          <div class="card low-shadow border-radius-large">
            <div class="card-image">
              <img src="<?= $client_logo; ?>">
            </div>

            <div class="card-content padding-small">
              <h2 class="text-stronger no-margin-top margin-bottom-medium"style="color: <?= $feat_color; ?>;">
                <?= get_the_title(); ?>
              </h2>

              <div class="chip <?= $branding_images_length == 0 ? 'no-display' : ''; ?>">
                <i class="fas fa-fingerprint margin-right-smaller" style="color: <?= $feat_color; ?>;"></i>
                Marca
              </div>

              <div class="chip <?= $package_images_length == 0 ? 'no-display' : ''; ?>">
                <i class="fas fa-box-open margin-right-smaller" style="color: <?= $feat_color; ?>;"></i>
                Embalagem
              </div>

              <div class="chip <?= $signaling_images_length == 0 ? 'no-display' : ''; ?>">
                <i class="fas fa-store-alt margin-right-smaller" style="color: <?= $feat_color; ?>;"></i>
                Sinalização
              </div>

              <div class="chip <?= $web_images_length == 0 ? 'no-display' : ''; ?>">
                <i class="fas fa-code margin-right-smaller" style="color: <?= $feat_color; ?>;"></i>
                Web
              </div>

              <div class="chip <?= $videos_length == 0 ? 'no-display' : ''; ?>">
                <i class="fas fa-video margin-right-smaller" style="color: <?= $feat_color; ?>;"></i>
                Vídeos
              </div>
            </div>

            <div class="card-action padding-small">
              <a href="#" class="btn button-bg white-text full-width" style="background-color: <?= $feat_color; ?>;">
                Fazer um orçamento
              </a>
            </div>
          </div>
        </div>
      </div>
    </aside>

    <div class="no-padding-x col s12 m7 l8 xl7 margin-top-small no-padding position-sticky light-grey-bg">
      <div class="row">
        <div class="no-padding-x col s12">
          <div class="padding-medium padding-bottom-medium">

            <div class="row">
              <div class="col s12">
                <h2 class="card-title margin-bottom-medium text-stronger text-large" style="color: <?= $feat_color; ?>">
                  <?php if ($slogan_icon != '') : ?>
                  <i class="fas fa-<?= $slogan_icon; ?> text-color"></i>
                  <?php endif; ?>

                  <?= $slogan; ?>
                </h2>
                <?= get_the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="padding-x-medium">
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
          <li class="tab <?= $branding_images_length == 0 ? 'disabled' : ''; ?>">
            <a class="active text-stronger" href="#branding">
              <i class="fas fa-fingerprint margin-right-smaller"></i>
              Marca
            </a>
          </li>

          <li class="tab <?= $package_images_length == 0 ? 'disabled' : ''; ?>">
            <a class="text-stronger" href="#package">
              <i class="fas fa-box-open margin-right-smaller"></i>
              Embalagem
            </a>
          </li>

          <li class="tab <?= $signaling_images_length == 0 ? 'disabled' : ''; ?>">
            <a class="text-stronger" href="signaling">
              <i class="fas fa-store-alt margin-right-smaller"></i>
              Sinalização
            </a>
          </li>

          <li class="tab <?= $web_images_length == 0 ? 'disabled' : ''; ?>">
            <a class="text-stronger" href="#web">
              <i class="fas fa-code margin-right-smaller"></i>
              Web
            </a>
          </li>

          <li class="tab <?= $videos_length == 0 ? 'disabled' : ''; ?>">
            <a class="text-stronger" href="#videos">
              <i class="fas fa-video margin-right-smaller"></i>
              Vídeos
            </a>
          </li>
        </ul>

        <div id="branding">
          <div class="portfolio-modal__images">
            <?php
              $loop = CFS()->get( 'branding_images' ) != '' ? CFS()->get( 'branding_images' ) : [];
              foreach ( $loop as $row ) {
                echo '<img src="'. $row['branding_image'] .'" alt="Portfólio '. get_the_title() .'" />';
              }
            ?>
          </div>
        </div>

        <div id="package">
          <div class="portfolio-modal__images">
            <?php
              $loop = CFS()->get( 'package_images' ) != '' ? CFS()->get( 'package_images' ) : [];
              foreach ( $loop as $row ) {
                echo '<img src="'. $row['package_image'] .'" alt="Portfólio '. get_the_title() .'" />';
              }
            ?>
          </div>
        </div>

        <div id="signaling">
          <div class="portfolio-modal__images">
            <?php
              $loop = CFS()->get( 'signaling_images' ) != '' ? CFS()->get( 'signaling_images' ) : [];
              foreach ( $loop as $row ) {
                echo '<img src="'. $row['signaling_image'] .'" alt="Portfólio '. get_the_title() .'" />';
              }
            ?>
          </div>
        </div>

        <div id="web">
          <div class="portfolio-modal__images">
            <?php
              $loop = CFS()->get( 'web_images' ) != '' ? CFS()->get( 'web_images' ) : [];
              foreach ( $loop as $row ) {
                echo '<img src="'. $row['web_image'] .'" alt="Portfólio '. get_the_title() .'" />';
              }
            ?>
          </div>
        </div>

        <div id="videos">
          <div class="portfolio-modal__images">
            <?php
              $loop = CFS()->get( 'videos' ) != '' ? CFS()->get( 'videos' ) : [];
              foreach ( $loop as $row ) {
                echo '<img src="'. $row['video'] .'" alt="Portfólio '. get_the_title() .'" />';
              }
            ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>


<script>
  document.body.style.overflow = 'unset';
</script>


<?php
get_footer();