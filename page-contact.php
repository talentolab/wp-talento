<?php
/**
 * Template Name: Contact
 * @package talento
 */

get_header();
?>

<main class="background-blob">
  <div class="block padding-y-larger">
    <div class="container-medium">
      <div class="no-padding-x">
        <div class="row no-margin">
          <div class="col s12 l6 padding-small budget--left-panel hide-on-med-and-down">
            <div class="card-custom-image truck wow fadeInUpSmall" data-wow-delay=".1s"></div>
          </div>
          <div class="col s12 l6">
            <div class="card padding-medium border-radius-large wow fadeInUpSmall low-shadow" data-wow-delay=".1s">
              <div class="card-content no-padding">

                <h2 class="budget-area-title">Entre em contato</h2>

                <p class="text-medium subtitle-color margin-y-medium">
                  Use o formulário abaixo para solicitar um orçamento ou
                  enviar uma mensagem com críticas e sugestões.
                </p>

                <form>
                  <div class="row row margin-bottom-small wow fadeInUpSmall" data-wow-delay=".2s">
                    <div class="input-field col s12 no-margin">
                      <input name="name" id="name" type="text" class="validate no-margin-y" required><br>
                      <label for="name">Nome</label>
                    </div>
                  </div>

                  <div class="row row margin-bottom-small wow fadeInUpSmall" data-wow-delay=".3s">
                    <div class="input-field col s12 no-margin">
                      <input name="email" id="email" type="email" class="validate no-margin-y" required><br>
                      <label for="email">E-mail</label>
                    </div>
                  </div>

                  <div class="row row margin-bottom-small wow fadeInUpSmall" data-wow-delay=".4s">
                    <div class="input-field col s12 no-margin">
                      <input name="phone" id="phone" type="text" class="validate no-margin-y" required><br>
                      <label for="phone">Telefone / Celular</label>
                    </div>
                  </div>

                  <div class="row row margin-bottom-small wow fadeInUpSmall" data-wow-delay=".5s">
                    <div class="input-field col s12 no-margin">
                      <textarea name="message" id="message" class="materialize-textarea validate no-margin-y"
                        required></textarea><br>
                      <label for="message">Sua mensagem</label>
                    </div>
                  </div>

                  <div class="row row no-margin">
                    <div class="input-field col s12 no-margin no-padding">
                      <input type="submit" value="Enviar" class="btn primary-bg shadow-0">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>




<?php
get_footer();
