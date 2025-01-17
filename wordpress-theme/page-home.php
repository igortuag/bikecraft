<?php
// Template Name: Home
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php
  $imagem_id = get_field('background_home');
  $background_large = wp_get_attachment_image_src($imagem_id, 'large');
  $background_medium = wp_get_attachment_image_src($imagem_id, 'medium');
?>
<style type="text/css">
  .introducao {
    background: url("<?php echo $background_large[0] ?>") no-repeat center;
    background-size: cover;
  }

  @media only screen and (max-width: 787px) {
    .introducao {
      background: url("<?php echo $background_medium[0] ?>") no-repeat center;
      background-size: cover;
    } 
  }
</style>
<section class="introducao">
  <div class="container">
    <h1 data-anime="400" class="fadeInDown">
      <?php the_field('titulo_introducao'); ?>
    </h1>
    <blockquote data-anime="800" class="quote-externo fadeInDown">
      <p>
        <?php the_field('quote_introducao'); ?>
      </p>
      <cite><?php the_field('citacao_introducao'); ?></cite>
    </blockquote>
    <a data-anime="1200" href="/produtos" class="btn">Orçamento</a>
  </div>
</section>

<section class="container produtos fadeInDown" data-anime="1600">
  <h2 class="subtitulo">Produtos</h2>
  <ul class="produtos_lista">
    <?php
      $args = array (
        'post_type' => 'produtos'
      );
      $the_query = new WP_Query ( $args );
    ?> 
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <li class="grid-1-3">
        <a href="<?php the_permalink(); ?>">
          <div class="produtos_icone">
            <img src="<?php the_field('icone_produto'); ?>" alt="Bikcraft <?php the_title(); ?>" />
          </div>
          <h3><?php the_title(); ?></h3>
          <p>
          
            <?php the_field('resumo_produto'); ?>
          </p>
        </a>
      </li>
    <?php endwhile; else: endif; ?>
    <?php wp_reset_query(); wp_reset_postdata(); ?>
  </ul>

  <div class="call">
    <p><?php the_field('chamada_produtos'); ?></p>
    <a href="/produtos" class="btn btn-preto">Produtos</a>
  </div>
</section>

<section class="portfolio">
  <div class="container">
    <h2 class="subtitulo">Portfólio</h2>
    <?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); ?>
  </div>
</section>


<?php endwhile; else: endif; ?>
<?php wp_reset_query(); wp_reset_postdata(); ?>

<?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>

<?php get_footer(); ?>