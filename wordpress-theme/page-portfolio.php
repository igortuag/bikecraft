<?php
// Template Name: Portfolio
get_header();
?>

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
    
<?php get_footer(); ?>