<?php
/**
 * Template Name: Contact
 * @package talento
 */

get_header();
?>

<main class="margin-top-large">
  <div class="block bg--blue-dark wave-bg--sine-2">
    <div class="padding-y-medium">
      <div class="no-padding-x">
        <div class="row g-0 no-margin px-3 px-lg-0">
          <div class="col-md-5 col-lg-6 col-xxl-5 budget--left-panel d-none d-md-block offset-lg-1 offset-xxl-2">
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

          <div class="col-12 col-md-7 col-lg-4 col-xxl-3">
            <div class="bg--white contact-page--form padding-medium border-radius-large wow fadeInUpSmall low-shadow" data-wow-delay=".1s">
              <div class="card-content no-padding">

                <h3 class="accent-color no-margin">Mande um e-mail</h3>

                <p class="text-small subtitle-color margin-y-medium">
                  Use o formulário abaixo para solicitar um orçamento ou
                  enviar uma mensagem com críticas e sugestões.
                </p>

                <form>
                  <div class="row g-0">
                    <div class="col-lg-12 margin-right-small margin-bottom-small">
                      <label for="name" class="form-label text-smaller">Seu nome</label>
                      <input type="text" class="text-small browser-default form-control form-control-lg" id="name" name="name" placeholder="João Silva">
                    </div>

                    <div class="col-lg-12 margin-bottom-small">
                      <label for="email" class="form-label text-smaller">Seu e-mail</label>
                      <input type="email" class="text-small browser-default form-control form-control-lg" id="email" name="email" placeholder="joao@exemplo.com">
                    </div>

                    <div class="col-lg-12 margin-bottom-medium">
                      <label for="message" class="form-label text-smaller">Sua mensagem</label>
                      <textarea class="text-small browser-default form-control form-control-lg" id="message" name="message"
                      placeholder="Digite aqui sua mensagem..."></textarea>
                    </div>

                    <div class="col-lg-12">
                      <button type="submit" class="bg--blue text--white margin-right-medium margin-bottom-medium"><i class="fas fa-paper-plane margin-right-small text-middle h-100"></i> Enviar mensagem</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-1 col-lg-1 col-xl-2 d-none d-md-block"></div>
        </div>
      </div>
    </div>
  </div>

</main>

<script src="//code.tidio.co/68d50pwhxax1kvt2fqq5nzqqikx6hq19.js" async></script>


<?php
get_footer();
