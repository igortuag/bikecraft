<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Bikecraft - Conheça o portfólio de clientes</title>
    <meta
      name="description"
      content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."
    />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bikecraft - Conheça o portfólio de clientes" />
    <meta
      property="og:description"
      content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."
    />
    <meta property="og:url" content="https://bikcraft.com/portfolio.html" />
    <meta property="og:image" content="https://bikcraft.com/img/og-img.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="./favicon.ico" />
    
    <link rel="stylesheet" href="./css/style.css" />
    <script>
      document.documentElement.classList.add("js");
    </script>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <a href="index.html" class="grid-4">
          <img src="./img/bikcraft.svg" alt="Bikcraft" />
        </a>
        <nav class="grid-12 header_menu">
          <ul>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="produtos.html">Produtos</a></li>
            <li><a href="portfolio.html" class="menu_ativo">Portfólio</a></li>
            <li><a href="contato.html">Contato</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="introducao-interna interna_porfolio">
      <div class="container">
        <h1 data-anime="400" class="fadeInDown">Porfolio</h1>
        <p data-anime="800" class="fadeInDown">Conheça os projetos que amamos mostrar</p>
      </div>
    </section>

    <section class="container fadeInDown" data-slide="quote" data-anime="1200">
      <blockquote class="quote_clientes">
        <p>
          "Pedalar sempre foi a minha paixão, o que o pessoal da Bikcraft fez foi intensificar o meu amor por esta
          atividade. Recomendo à todos que amo."
        </p>
        <cite>Barbara Moss</cite>
      </blockquote>
      <blockquote class="quote_clientes">
        <p>
          "Nada melhor do que dar um rolê com a minha Bikcraft na orla. Essa é a minha companheira mais fiel, nunca me
          traiu e está sempre a minha disposição."
        </p>
        <cite>Jhony Rato</cite>
      </blockquote>
      <blockquote class="quote_clientes">
        <p>
          "Aqueles que ainda não possuem uma Bikcraft, não sabem o que estão perdendo. A precisão é absurda e a
          velocidade transcendental. Nunca vi nada igual."
        </p>
        <cite>Bernardo</cite>
      </blockquote>
    </section>

    <section class="portfolio fadeInDown" data-anime="1600">
      <div class="container" data-slide="portfolio">
        <ul class="portfolio_lista">
          <li class="grid-8"><img src="./img/portfolio/retro.jpg" alt="Bicicleta retro" /></li>
          <li class="grid-8"><img src="./img/portfolio/passeio.jpg" alt="Bicicleta passeio" /></li>
          <li class="grid-16"><img src="./img/portfolio/esporte.jpg" alt="Bicicleta esporte" /></li>
        </ul>
        <ul class="portfolio_lista">
          <li class="grid-8"><img src="./img/portfolio/passeio.jpg" alt="Bicicleta passeio" /></li>
          <li class="grid-8"><img src="./img/portfolio/retro.jpg" alt="Bicicleta retro" /></li>
          <li class="grid-16"><img src="./img/portfolio/esporte.jpg" alt="Bicicleta esporte" /></li>
        </ul>
      </div>
    </section>

    <div class="quebra">
      <blockquote class="quote-externo container">
        <p>
          "O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana."
        </p>
        <cite>WILLIAM MORRIS</cite>
      </blockquote>
    </div>

    <footer>
      <div class="footer">
        <div class="container">
          <div class="grid-8 footer_historia">
            <h3>Nossa Historia</h3>
            <p>
              Quando iniciamos a Bikcraft queríamos apenas um produto que adoraríamos utilizar. Somos apaixonados por
              pedalar e também por fazer as coisas com as nossas próprias mãos. Assim surgiu um sonho na garagem da
              nossa casa.
            </p>
          </div>

          <div class="grid-4 footer_contato">
            <h3>Contato</h3>
            <ul>
              <li>- 27 99999-9999</li>
              <li>- contato@bikcraft.com</li>
              <li>- Vila Velha - ES</li>
            </ul>
          </div>

          <div class="grid-4 footer_redes">
            <h3>Redes Sociais</h3>
            <ul>
              <li>
                <a href="https://facebook.com/" target="_blank">
                  <img src="./img/redes-sociais/facebook.svg" alt="facebook" />
                </a>
              </li>
              <li>
                <a href="https://instagram.com/" target="_blank">
                  <img src="./img/redes-sociais/instagram.svg" alt="instagram" />
                </a>
              </li>
              <li>
                <a href="https://twitter.com/" target="_blank">
                  <img src="./img/redes-sociais/twitter.svg" alt="twitter" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="copy">
        <div class="container">
          <p class="grid-16">Bikcraft 2020 - Alguns direitos reservados.</p>
        </div>
      </div>
    </footer>

    <script src="./js/simple-slide.js"></script>
    <script src="./js/simple-anime.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
