<?php
// Template Name: Produtos
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>
    
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

    <?php include(TEMPLATEPATH . "/inc/orcamento.php"); ?>

    <?php endwhile; else: endif; ?>
    
<?php get_footer(); ?>
