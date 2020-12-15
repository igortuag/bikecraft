<?php
// Template Name: Single Produtos
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <section class="container produtos_item fadeInDown" data-anime="1200">
      <div class="grid-11">
        <img src="./img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Passeio" />
        <h2><?php the_title(); ?></h2>
      </div>
      <div class="grid-5 produto_icone">
        <img src="./img/produtos/passeio.svg" alt="Bikcraft Passeio" />
      </div>
      <div class="grid-8">
        <img src="./img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft Passeio" />
      </div>
      <div class="grid-8 produto_info">
        <?php the_content(); ?>
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

    <?php endwhile; else: endif; ?>
    
<?php get_footer(); ?>
