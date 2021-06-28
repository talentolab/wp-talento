<?php
/**
 * Template Name: Portfolio
 * @package talento
 */

get_header();

$tag = isset($_GET[ 'tag' ]) ?? $_GET[ 'tag' ];
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
    <div class="row no-padding valign-wrapper">
      <div class="col s12 m2 l3 hide-on-small-only"></div>

      <div class="col s12 m8 l6">
        <h1 class="primary-color padding-top-large padding-bottom-medium text-stronger text-center no-margin wow fadeInUpSmall accent-color">
          Soluções criativas para o seu negócio
        </h1>

        <div class="grey-text text-center padding-bottom-large wow fadeInUpSmall" data-wow-delay=".2s">
          Confira alguns de nossos projetos
        </div>
      </div>

      <div class="col s12 m2 l3 hide-on-small-only"></div>
    </div>
  </div>
</header>

          Todos
        </a>

        <a href="?tag=marca" class="category-filter-btn btn text-small <?= active( 'marca' ); ?>">
          <i class="fas fa-fingerprint margin-right-smaller text-small"></i>
          Marca
        </a>

        <a href="?tag=embalagem" class="category-filter-btn btn text-small <?= active( 'embalagem' ); ?>">
          <i class="fas fa-box-open margin-right-smaller text-small"></i>
          Embalagem
        </a>

        <a href="?tag=sinalizacao" class="category-filter-btn btn text-small <?= active( 'sinalizacao' ); ?>">
          <i class="fas fa-store-alt margin-right-smaller text-small"></i>
          Sinalização
        </a>

        <a href="?tag=web" class="category-filter-btn btn text-small <?= active( 'web' ); ?>">
          <i class="fas fa-code margin-right-smaller text-small"></i>
          Web
        </a>

        <a href="?tag=videos" class="category-filter-btn btn text-small <?= active( 'videos' ); ?>">
          <i class="fas fa-video margin-right-smaller text-small"></i>
          Vídeos
        </a>
      </div>

      <div class="row">
        <span>
          Exibindo <strong>12</strong> resultados de <strong>todas as categorias</strong>
        </span>
      </div>




          <div class="col s12 m6 l4 xl4 no-padding">
            <div class="search-bar-wrapper">
              <div class="search-bar input-field">
                <form action="" method="GET">
                  <input id="mz-portfolio-search" name="q" type="search" class="autocomplete search-bar__input text-small" placeholder="Buscar projeto" autofocus autocomplete="off" />
                  
                  <button type="submit" class="search-bar__submit tooltipped" data-tooltip="Pesquisar" data-position="left">
                    <i class="fas fa-search"></i>
                  </button>
                </form>

                <script>
                  let searchArray = {
                    <?php
                      $args = array(  
                        'post_type' => 'projetos',
                        'post_status' => 'publish',
                        'posts_per_page' => 9, 
                        'orderby' => 'title', 
                        'order' => 'ASC',
                      );

                      $loop = new WP_Query( $args ); 
                          
                      while ( $loop->have_posts() ) {
                        $loop->the_post(); 
                        echo '"'. get_the_title() .'": "'. get_the_post_thumbnail_url() .'",';
                      };

                      wp_reset_postdata();
                    ?>
                  }
                </script>
              </div>
            </div>
          </div>



      <div class="row gallery-wrapper margin-top-large">
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/custom/ajax-load-more.custom.css" defer />

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
</main>


<?php
get_footer();
?>