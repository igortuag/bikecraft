<?php 
  $contato = get_page_by_title('contato');
  $produtos = get_page_by_title('produtos');
?>

<section class="orcamento">
  <div class="container">
    <h2 class="subtitulo">Orçamento</h2>
    <form id="form_orcamento" class="form grid-8 formphp" method="POST" action="<?php echo get_template_directory_uri(); ?>/enviar.php">
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
      <span><?php the_field('telefone', $contato); ?></span>
      <span><?php the_field('email', $contato); ?></span>

      <h3>Monte a sua Bikcraft</h3>
      <p>Escolha as especificações</p>
      <?php the_field('itens_orcamento', $produtos); ?>
    </div>
  </div>
</section>