<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Bikecraft - Conheça as linhas Passeio, Retrô e Esporte</title>
    <meta
      name="description"
      content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."
    />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bikecraft - Conheça as linhas Passeio, Retrô e Esporte" />
    <meta
      property="og:description"
      content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."
    />
    <meta property="og:url" content="https://bikcraft.com/produtos.html" />
    <meta property="og:image" content="https://bikcraft.com/img/og-img.png" />
    <link rel="shortcut icon" href="./favicon.ico" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
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
            <li><a href="produtos.html" class="menu_ativo">Produtos</a></li>
            <li><a href="portfolio.html">Portfólio</a></li>
            <li><a href="contato.html">Contato</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="introducao-interna interna_produtos">
      <div class="container">
        <h1 data-anime="400" class="fadeInDown">Produtos</h1>
        <p data-anime="800" class="fadeInDown">Conheça todos nossos produtos</p>
      </div>
    </section>

    <section class="container produtos_item fadeInDown" data-anime="1200">
      <div class="grid-11">
        <img src="./img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Passeio" />
        <h2>Passeio</h2>
      </div>
      <div class="grid-5 produto_icone">
        <img src="./img/produtos/passeio.svg" alt="Bikcraft Passeio" />
      </div>
      <div class="grid-8">
        <img src="./img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft Passeio" />
      </div>
      <div class="grid-8 produto_info">
        <p>
          No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formulação da gestão
          inovadora da qual fazemos parte da qual fazemos parte.
        </p>
        <ul>
          <li>Conforto</li>
          <li>Velocidade</li>
          <li>Design</li>
          <li>Versatilidade</li>
        </ul>
      </div>
    </section>

    <section class="container produtos_item">
      <div class="grid-11">
        <img src="./img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft esporte" />
        <h2>Esporte</h2>
      </div>
      <div class="grid-5 produto_icone">
        <img src="./img/produtos/esporte.svg" alt="Bikcraft Esporte" />
      </div>
      <div class="grid-8">
        <img src="./img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft Esporte" />
      </div>
      <div class="grid-8 produto_info">
        <p>
          No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formulação da gestão
          inovadora da qual fazemos parte da qual fazemos parte.
        </p>
        <ul>
          <li>Conforto</li>
          <li>Velocidade</li>
          <li>Design</li>
          <li>Versatilidade</li>
        </ul>
      </div>
    </section>

    <section class="container produtos_item">
      <div class="grid-11">
        <img src="./img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft Retro" />
        <h2>Retro</h2>
      </div>
      <div class="grid-5 produto_icone">
        <img src="./img/produtos/retro.svg" alt="Bikcraft Retro" />
      </div>
      <div class="grid-8">
        <img src="./img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft retro" />
      </div>
      <div class="grid-8 produto_info">
        <p>
          No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formulação da gestão
          inovadora da qual fazemos parte da qual fazemos parte.
        </p>
        <ul>
          <li>Conforto</li>
          <li>Velocidade</li>
          <li>Design</li>
          <li>Versatilidade</li>
        </ul>
      </div>
    </section>

    <section class="orcamento">
      <div class="container">
        <h2 class="subtitulo">Orçamento</h2>
        <form id="form_orcamento" class="form grid-8 formphp" method="POST" action="./enviar.php">
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" required />
          <label for="email">E-mail</label>
          <input type="email" id="email" name="email" required />
          <label for="telefone">Telefone</label>
          <input type="text" id="telefone" name="telefone" />
          <label for="mensagem">Mensagem</label>

          <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
          <input type="text" class="nao-aparece" name="leaveblank" />
          <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
          <input type="text" class="nao-aparece" name="dontchange" value="http://" />

          <textarea id="mensagem" name="mensagem" required></textarea>
          <button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
        </form>

        <div class="orcamento_dados grid-8">
          <h3>Dados</h3>
          <span>+55 27 99999 9999</span>
          <span>orcamento@bikcraft.com</span>

          <h3>Monte a sua Bikcraft</h3>
          <p>Escolha as especificações</p>
          <ul>
            <li>- Cores</li>
            <li>- Estilo</li>
            <li>- Medidas</li>
            <li>- Acessórios</li>
            <li>- E Outros</li>
          </ul>
        </div>
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
              Quando iniciamos a Bikcraft queriamos apenas um produto que adoraríamos utilizar. Somos apaixonados por
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

    <script src="./js/simple-anime.js"></script>
    <script src="./js/simple-form.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
