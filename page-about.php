<?php
/**
 * Template Name: About
 * @package talento
 */

get_header();
?>

<header class="about-header padding-top-large">
  <div class="clouds">
    <div class="cloud cloud--1" data-skip-lazy></div>
    <div class="cloud cloud--2" data-skip-lazy></div>
    <div class="cloud cloud--3" data-skip-lazy></div>
  </div>

  <div class="block">
    <div class="row g-0 text-middle px-5 px-lg-0">
      <div class="col-12 col-lg-10 col-xxl-8 offset-lg-1 offset-xxl-2">
        <h1 class="padding-top-large padding-bottom-medium text-center no-margin wow fadeInUpSmall text--green">
          Completa e inovadora
        </h1>

        <div class="grey-text text-center wow fadeInUpSmall" data-wow-delay=".2s">
          A TALENTO desperta
          a sua motivação e criatividade!
        </div>
      </div>
    </div>
  </div>
  
  <div class="block wave-bg wave--3">
    <div class="row g-5 padding-y-large px-5 px-lg-0">
      <div class="col-12 col-md-6 col-lg-5 col-xxl-5 offset-lg-1 offset-xxl-2">
        <div class="about--header-image"></div>
      </div>
  
      <div class="col-12 col-md-6 col-lg-5 col-xxl-3 text-middle">
        <div class="about-card">
          <h3 class="text--green text-stronger wow fadeInUpSmall" data-wow-delay=".2s">
            13 anos de mercado
          </h3>

          <p class="wow fadeInUpSmall" data-wow-delay=".3s">
            Durante nossa jornada até aqui, tivermos oportunidades únicas de utilizarmos nossos conhecimentos não só 
            na área de Design e Marketing, como também ministrando palestras e cursos Brasil à fora.
          </p>
        </div>
      </div>
    </div>
  </div>
</header>

<main>
  <div class="block bg--blue-darker">
    <div class="row g-5 no-margin-bottom padding-y-larger px-5 px-lg-0">  
      <div class="col-12 col-md-6 col-lg-6 col-xxl-4 offset-lg-1 offset-xxl-2 text-middle">
        <div class="about-card text--white bg--blue-dark">
          <h3 class="text--green text-stronger">
            Conheça a Talento Design
          </h3>

          <p>
            Atuando no mercado há 13 anos, nosso maior compromisso é continuar a oferecer projetos que valorizam o 
            design e a essência de cada negócio. Estreitar a comunicação entre marca e consumidor.
          </p>

          <p>Seja para pequenas, médias ou grandes empresas, projetamos com sensibilidade e responsabilidade olhando 
            sempre à frente.
          </p>


          <p class="text-left wow fadeInUpSmall" data-wow-delay=".4s">
            <a href="/sobre/#equipe" class="button bg--blue text--white shadow-3">
              Conheça nossa equipe
              <i class="fas fa-chevron-right f-end text-smaller text-middle h-100"></i>
            </a>
          </p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 col-xxl-4 text-middle">
        <div class="about--illustration --walt-disney-full position-sticky" style="top: 72px;"></div>
      </div>
    </div>
  </div>





  <div class="block bg--blue-darker rect-bg --purple-light">
    <div class="row no-margin padding-y-medium px-5 px-lg-0">
      <div class="col-12 col-md-6 col-lg-4 col-xxl-4 offset-lg-1 offset-xxl-2 text-middle">
        <div class="about--illustration --camila-bia position-sticky" style="top: 72px;"></div>
      </div>

      
      <div class="col-12 col-md-6 col-lg-6 col-xxl-4 text-middle">
        <div class="about-card text--white bg--blue-dark">
          <h3 class="text--green text-stronger">
            Reconhecimento
          </h3>

          <p>
            Desde o primeiro ano de empresa, em 2008 com o Prêmio CREA/PA, a Talento vem tendo seu valor reconhecido 
            por onde passa, mantendo presença nos maiores eventos e registrando seu trabalho em todo o Brasil.
          </p>
        </div>
      </div>
    </div>
  </div>



  <div class="block">
    <div class="about-pic--2"></div>
  </div>



  <div class="block about-team bg--blue-lighter wave-bg wave--10" id="equipe">
    <div class="row no-padding no-margin">
      <div class="col-12 col-md-10 col-xxl-8 offset-md-1 offset-xxl-2">
        <h2 class="padding-top-large padding-bottom-medium text-center no-margin wow fadeInUpSmall text--green">
          Nossa equipe talentosa
        </h2>

        <div class="grey-text text-center padding-bottom-large wow fadeInUpSmall" data-wow-delay=".2s">
          Veja quem é a Talento
        </div>
      </div>

      <div class="col-12 col-lg-8 col-xxl-6 offset-lg-2 offset-xxl-3">

        <div class="row g-3 px-5 px-lg-0">
          <?php
            $loop = CFS()->get( 'team_loop' );
            foreach ( $loop as $row ) :
          ?>

            <div class="col-12 col-sm-6 col-md-4 col-xxl-3">
              <div class="team-card">
                <div class="--image" style="background-image: url(<?= $row['member_pic']; ?>)"></div>

                <div class="--title padding-small text-center">
                  <div class="__name">
                    <?= $row['member_name']; ?>
                  </div>
    
                  <div class="__roll">
                    <?= $row['member_roll']; ?>
                  </div>
                </div>

              </div>
            </div>

          <?php
            endforeach;
          ?>

        </div>



      </div>
    </div>
  </div>



  <div class="block padding-y-larger bg--white"></div>
</main>


<?php
get_footer();
?>