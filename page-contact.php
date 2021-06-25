<?php
/**
 * Template Name: Contact
 * @package talento
 */

get_header();
?>

<main class="margin-top-large">
  <div class="block primary-bg wave-bg--sine-2">
    <div class="padding-y-larger">
      <div class="no-padding-x">
        <div class="row no-margin">
          <div class="col s12 m1 l1 xl2 hide-on-small-only"></div>

          <div class="col s12 l5 xl5 padding-small budget--left-panel hide-on-med-and-down">
            <div class="contact-ilustration wow fadeInLeftSmall" data-wow-delay=".2s"></div>

            <div class="margin-top-larger text-center">
              <a href="#" class="btn green">
                <i class="fab fa-whatsapp left"></i>
                Chama no WhatsApp
              </a>

              <a href="#" class="btn margin-left-smaller">
                <i class="fas fa-phone-alt left"></i>
                Ligar
              </a>
            </div>
          </div>

          <div class="col s12 m10 l5 xl4">
            <div class="card contact-page--form padding-medium border-radius-large wow fadeInUpSmall low-shadow" data-wow-delay=".1s">
              <div class="card-content no-padding">

                <h2 class="accent-color">Mande um e-mail</h2>

                <p class="text-medium subtitle-color margin-y-medium">
                  Use o formulário abaixo para solicitar um orçamento ou
                  enviar uma mensagem com críticas e sugestões.
                </p>

                <form>
                  <div class="row margin-bottom-small wow fadeInUpSmall" data-wow-delay=".2s">
                    <div class="input-field col s12 no-margin">
                      <input name="name" id="name" type="text" class="validate padding-y-smaller" required><br>
                      <label for="name" class="text-medium">Nome</label>
                    </div>
                  </div>

                  <div class="row margin-bottom-small wow fadeInUpSmall" data-wow-delay=".3s">
                    <div class="input-field col s12 no-margin">
                      <input name="email" id="email" type="email" class="validate padding-y-smaller" required><br>
                      <label for="email" class="text-medium">E-mail</label>
                    </div>
                  </div>

                  <div class="row margin-bottom-small wow fadeInUpSmall" data-wow-delay=".4s">
                    <div class="input-field col s12 no-margin">
                      <input name="phone" id="phone" type="text" class="validate padding-y-smaller" required><br>
                      <label for="phone" class="text-medium">Telefone / Celular</label>
                    </div>
                  </div>

                  <div class="row margin-bottom-small wow fadeInUpSmall" data-wow-delay=".5s">
                    <div class="input-field col s12 no-margin">
                      <textarea name="message" id="message" class="materialize-textarea validate padding-y-smaller"
                        required></textarea><br>
                      <label for="message" class="text-medium">Sua mensagem</label>
                    </div>
                  </div>

                  <div class="row no-margin">
                    <div class="input-field col s12 no-margin no-padding">
                      <input type="submit" value="Enviar mensagem" class="btn primary-bg shadow-0">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col s12 m1 l1 xl2 hide-on-small-only"></div>
        </div>
      </div>
    </div>
  </div>

</main>




<?php
get_footer();
