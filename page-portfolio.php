<?php
/**
 * Template Name: Portfolio
 * @package talento
 */

get_header();

$tag = $_GET[ 'tag' ];
$search = $_GET[ 'q' ];
?>


<header class="margin-top-large">
</header>

<main class="background-blob">
  <!-- Portfólio -->
  <div class="block">
    <div class="container-medium padding-y-large">








      










      <div class="row">
        <div class="col s12 m6 l8 xl9 no-padding-x">
          <h2 class="decoration text-stronger margin-bottom-medium wow fadeInUpSmall" data-wow-delay=".2s">
            Nossos trabalhos
          </h2>


        </div>

        <div class="col s12 m6 l4 xl3 no-padding">
          <div class="search-bar-wrapper">
            <div class="search-bar">
              <input type="search" class="search-bar__input text-small" placeholder="Buscar projeto" />

              <button type="button" class="search-bar__submit">
                <i class="material-icons">search</i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="row">

    




        <a href="#" class="category-filter-btn btn text-small active">
          <i class="material-icons left">border_all</i>
          Todos
        </a>

        <a href="#" class="category-filter-btn btn text-small">
          <i class="fas fa-fingerprint margin-right-smaller text-small"></i>
          Marca
        </a>

        <a href="#" class="category-filter-btn btn text-small">
          <i class="fas fa-box-open margin-right-smaller text-small"></i>
          Embalagem
        </a>

        <a href="#" class="category-filter-btn btn text-small">
          <i class="fas fa-store-alt margin-right-smaller text-small"></i>
          Sinalização
        </a>

        <a href="#" class="category-filter-btn btn text-small">
          <i class="fas fa-code margin-right-smaller text-small"></i>
          Web
        </a>

        <a href="#" class="category-filter-btn btn text-small">
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
              container_type="div" 
              post_type="projetos" 
              posts_per_page="6" 
              offset="0" 
              pause="false" 
              images_loaded="true" 
              scroll="true" 
              progress_bar="true" 
              progress_bar_color="868ff3" 
              button_label="Carregar mais" 
              button_loading_label="Carregando..." 
              button_done_label="Isso é tudo :)"
            ]'); ?>
      </div>
    </div>
  </div>

</main>


<?php
get_footer();
?>