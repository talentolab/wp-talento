<?php
/**
 * Template Name: Portfolio
 * @package talento
 */

get_header();

$tag = isset( $_GET[ 'tag' ] ) ?? $_GET[ 'tag' ];
$search = isset($_GET[ 'q' ]) ?? $_GET[ 'q' ];
?>


<div class="modal">
  <div class="modal--overlay"></div>
  <div class="modal--content">
    <section class="content"></section>
  </div>
</div>

<header class="margin-top-large">
  <div class="block">
    <div class="row px-5 px-md-0 text-middle">
      <div class="col-sm-12 col-md-8 col-lg-6 col-xxl-6 offset-md-2 offset-lg-3 offset-xxl-3 px-0">
        <h1 class="text--blue-dark padding-top-large padding-bottom-medium text-stronger text-center no-margin wow fadeInUpSmall text--green">
          Soluções criativas para o seu negócio
        </h1>

        <div class="grey-text text-medium text-center padding-bottom-large wow fadeInUpSmall" data-wow-delay=".2s">
          Confira alguns de nossos projetos
        </div>
      </div>
    </div>
  </div>
</header>

<main class="wow fadeInUpSmall" data-wow-delay=".6s" style="visibility: hidden">
  
  <div class="block bg--blue-lighter wave-bg--convex-1 padding-top-large">
    <div class="row g-0 px-5 px-lg-0 mb-0">
      <div class="col-12 col-lg-10 col-xxl-8 offset-lg-1 offset-xxl-2">
        <div class="margin-y-medium wow fadeInUpSmall text-center" data-wow-delay=".6s">
          <?php
            function active ( $button ) {
              global $tag;
              
              return $tag == $button ? 'active' : '';
            }
          ?>
  
          <a href="/portfolio/" class="category-filter-btn <?= active( '' ); ?>">
            <i class="fas fa-th margin-right-smaller text-medium text-middle"></i>
            <span class="text-middle text-small">Todos</span>
          </a>
  
          <a href="?tag=marca" class="category-filter-btn <?= active( 'marca' ); ?>">
            <i class="fas fa-fingerprint margin-right-smaller text-medium text-middle"></i>
            <span class="text-middle text-small">Marca</span>
          </a>
  
          <a href="?tag=embalagem" class="category-filter-btn <?= active( 'embalagem' ); ?>">
            <i class="fas fa-box-open margin-right-smaller text-medium text-middle"></i>
            <span class="text-middle text-small">Embalagem</span>
          </a>
  
          <a href="?tag=sinalizacao" class="category-filter-btn <?= active( 'sinalizacao' ); ?>">
            <i class="fas fa-store-alt margin-right-smaller text-medium text-middle"></i>
            <span class="text-middle text-small">Sinalização</span>
          </a>
  
          <a href="?tag=web" class="category-filter-btn <?= active( 'web' ); ?>">
            <i class="fas fa-code margin-right-smaller text-medium text-middle"></i>
            <span class="text-middle text-small">Web</span>
          </a>
  
          <a href="?tag=videos" class="category-filter-btn <?= active( 'videos' ); ?>">
            <i class="fas fa-video margin-right-smaller text-medium text-middle"></i>
            <span class="text-middle text-small">Vídeos</span>
          </a>
        </div>
      </div>
  
      <div class="col-12 col-lg-8 col-xxl-6 offset-lg-2 offset-xxl-3">
        <div class="row">
          <div class="row valign-wrapper wow fadeInUpSmall" data-wow-delay=".4s">
            <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8 no-padding-x">
              <div class="grey-text alm-results-text"></div>
            </div>
  
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 no-padding">
              <div class="search-bar-wrapper">
                <div class="search-bar input-field">
                  <form action="" method="GET">
                    <input id="mz-portfolio-search" name="q" type="search" class="autocomplete search-bar__input text-small" placeholder="Buscar projeto" autofocus autocomplete="off" />
                    
                    <button type="submit" class="search-bar__submit tooltipped" data-tooltip="Pesquisar" data-position="left">
                      <i class="fas fa-search text-middle h-100 padding-left-smaller"></i>
                    </button>
                  </form>
  
                  <?php
                    $args = array(  
                      'post_type' => 'projetos',
                      'post_status' => 'publish',
                      'posts_per_page' => 9, 
                      'orderby' => 'title', 
                      'order' => 'ASC'
                    );
  
                    $loop = new WP_Query( $args ); 
                  ?>
  
                  <script>
                    let searchArray = {
                      <?php
                        while ( $loop->have_posts() ) : 
                          $loop->the_post();
                      ?>
                          "<?= get_the_title(); ?>":"<?= get_the_post_thumbnail_url(); ?>",
                      <?php endwhile; ?>
                    }
                  </script>
  
                  <?php
                    wp_reset_postdata();
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row g-0 gallery-wrapper margin-top-large no-margin-y wow fadeInUpSmall" data-wow-delay=".8s">
          <link rel="stylesheet" href="<?= __DIR; ?>/css/custom/ajax-load-more.custom.css" defer />
          <!-- Portfólio -->
          <?= do_shortcode('
            [ajax_load_more
            tag="'. $tag .'"
            search="'. $search .'"
            post_type="projetos"
            scroll="true"
            posts_per_page="6"
            container_type="div"
            offset="0"
            pause="false"
            images_loaded="true"
            orderby="menu_order"
            button_loading_label="Carregando..."
            progress_bar_color="868ff3"
            button_label="Carregar mais"
            button_done_label="Isso é tudo :)"
          ]'); ?>
  
        </div>
      </div>
    </div>
  </div>
</main>


<?php
get_footer();
?>