
# Talento WordPress Theme

Tema desenvolvido para o novo site da Talento Design.

## Compilando os arquivos Sass

Se já tiver instalado o Sass, pule esta etapa. Se não, execute este comando para instalá-lo:

```shell
yarn add sass --dev
```

Caso não use o Yarn, instale com o NPM:

```shell
npm install sass --save-dev
```

Aí é só rodar este comando:

```shell
yarn sass-comp
```

Ou com NPM:

```shell
npm run sass-comp
```

Este script já vem com a flag `--watch` por padrão, então ele ficará o tempo todo verificando se o arquivo foi alterado e gerará um novo arquivo `main.css`.

## Plugins essenciais

Estes plugins são necessários para o funcionamento correto desse tema. Caso algum deles não esteja instalado, é exibido um alerta no painel, recomendando a instalação deles.

- [Ajax Load More](https://br.wordpress.org/plugins/ajax-load-more/): adiciona a funcionalidade de rolagem infinita.
- [Custom Field Suite](https://br.wordpress.org/plugins/custom-field-suite/): permite a criação de campos personalizados no painel. É uma alternativa gratuita ao Advanced Custom Fields.
- [Custom Post Type UI](https://br.wordpress.org/plugins/custom-post-type-ui/): permite criar facilmente tipos de posts, taxonomias, etc.
- [Font Awesome](https://br.wordpress.org/plugins/font-awesome/): importa os ícones do Font Awesome no site.
- [Safe SVG](https://br.wordpress.org/plugins/safe-svg/): permite o upload de imagens SVG de maneira segura à biblioteca de mídia.

## Plugins opcionais

Os plugins opcionais servem apenas para melhorar o desempenho do site ou por pura preferência do usuário, porém, não são críticos, portanto, o tema rodará mesmo que sem eles.

- [Classic Editor](https://br.wordpress.org/plugins/classic-editor/): ativa o Editor Clássico do WordPress.
- [EWWW Image Optimizer](https://br.wordpress.org/plugins/ewww-image-optimizer/): otimiza o tamanho das images carregadas no site e as converte para WebP.
- [Perfect Images + Retina](https://br.wordpress.org/plugins/ewww-image-optimizer/): Usa tamanhos de imagens adequados para cada tela de diferentes dispositivos.

## Bibliotecas e frameworks

Todas as bibliotecas e frameworks já vêm embutidas no diretório do tema.

- Animate.css (versão legada)
- [Helpers.css](https://ojvribeiro.github.io/helpers.css)
- JQuery
- Lity
- Materialize
- Swiper.js
- WOW.js

## Pré-processadores

- Sass

## Gerenciadores de pacotes

- Yarn
- NPM

## Autor

- Victor Ribeiro ([GitHub](https://github.com/ojvribeiro) | [Twitter](https://twitter.com/ojvribeiro))
