<?php $contato = get_page_by_title('contato'); ?>

<style>
  .quebra {
    background: url("<?php the_field('background_footer', $contato); ?>") no-repeat center;
    background-size: cover;
  }
</style>

<div class="quebra">
  <blockquote class="quote-externo container">
    <?php the_field('frase_footer', $contato); ?>
    <cite><?php the_field('autor_frase_footer', $contato); ?></cite>
  </blockquote>
</div>

<footer>
      <div class="footer">
        <div class="container">
          <div class="grid-8 footer_historia">
            <h3>Nossa Historia</h3>
            <?php the_field('resumo_historia', $contato); ?>
          </div>

          <div class="grid-4 footer_contato">
            <h3>Contato</h3>
            <ul>
              <li>- <?php the_field('telefone', $contato); ?></li>
              <li>- <?php the_field('email', $contato); ?></li>
              <li>- <?php the_field('endereco2', $contato); ?></li>
            </ul>
          </div>

          <div class="grid-4 footer_redes">
            <h3>Redes Sociais</h3>
            <?php include(TEMPLATEPATH . "/inc/redes-sociais.php"); ?>
          </div>
        </div>
      </div>

      <div class="copy">
        <div class="container">
          <p class="grid-16"><?php bloginfo('name'); ?> <?php echo date('Y'); ?> - Alguns direitos reservados.</p>
        </div>
      </div>
    </footer>
    <!-- Inicio Wordpress Footer -->
    <?php wp_footer(); ?>
    <!-- Final Wordpress Footer -->
  </body>
</html>