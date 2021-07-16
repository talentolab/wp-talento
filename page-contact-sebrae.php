<?php
/**
 * Template Name: Contact SEBRAE
 * @package talento
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://ojvribeiro.github.io/helpers.css/src/helpers.min.css?v=6438f09">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>
  <main>
    <div class="block margin-top-large padding-y-larger bg--blue-darker wave-bg--sine-2">
      <div class="container-medium">
        <div class="no-padding-x">
          <div class="row no-margin">
            <div class="col-sm-12 col-lg-6 padding-small budget--left-panel d-none d-lg-block">
              <div class="meet-talento-ilustration wow fadeInLeftSmall overlap-bottom-larger" data-wow-delay=".2s"></div>
            </div>

            <div class="col-sm-12 col-lg-6">
              <div class="card padding-medium border-radius-large wow fadeInUpSmall low-shadow" data-wow-delay=".1s">
                <div class="card-content no-padding">

                  <h2 class="accent-color">Entre em contato</h2>

                  <p class="text-medium subtitle-color margin-y-medium">
                    Use o formulário abaixo para solicitar um orçamento ou
                    enviar uma mensagem com críticas e sugestões.
                  </p>

                  <form>
                    <div class="row margin-bottom-small wow fadeInUpSmall" data-wow-delay=".2s">
                      <div class="input-field col-sm-12 no-margin">
                        <input name="name" id="name" type="text" class="validate padding-y-smaller" required><br>
                        <label for="name" class="text-medium">Nome</label>
                      </div>
                    </div>

                    <div class="row margin-bottom-small wow fadeInUpSmall" data-wow-delay=".3s">
                      <div class="input-field col-sm-12 no-margin">
                        <input name="email" id="email" type="email" class="validate padding-y-smaller" required><br>
                        <label for="email" class="text-medium">E-mail</label>
                      </div>
                    </div>

                    <div class="row margin-bottom-small wow fadeInUpSmall" data-wow-delay=".4s">
                      <div class="input-field col-sm-12 no-margin">
                        <input name="phone" id="phone" type="text" class="validate padding-y-smaller" required><br>
                        <label for="phone" class="text-medium">Telefone / Celular</label>
                      </div>
                    </div>

                    <div class="row margin-bottom-small wow fadeInUpSmall" data-wow-delay=".5s">
                      <div class="input-field col-sm-12 no-margin">
                        <textarea name="message" id="message" class="materialize-textarea validate padding-y-smaller"
                          required></textarea><br>
                        <label for="message" class="text-medium">Sua mensagem</label>
                      </div>
                    </div>

                    <div class="row no-margin">
                      <div class="input-field col-sm-12 no-margin no-padding">
                        <input type="submit" value="Enviar" class="btn bg--blue-darker shadow-0">
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
</body>
</html>