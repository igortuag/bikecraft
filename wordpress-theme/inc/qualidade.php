<section class="qualidade container">
  <h2 class="subtitulo">Qualidade</h2>
  <img src="<?php echo get_template_directory_uri(); ?>/img/bikcraft-qualidade.svg" alt="Bikcraft" />
  <ul class="qualidade_lista">
    <li class="grid-1-3">
      <h3>Durabilidade</h3>
      <p>Sólida como pedra, leve com o vento e resistente como o diamante, são nossos diferenciais.</p>
    </li>
    <li class="grid-1-3">
      <h3>Design</h3>
      <p>Feitas sob medida para o melhor conforto e eficiência. Adaptamos a sua Bikcraft para o seu corpo.</p>
    </li>
    <li class="grid-1-3">
      <h3>Sustentabilidade</h3>
      <p>Além de ajudar a cuidar do meio ambiente, tirando carros da rua, toda a produção é sustentável.</p>
    </li>
  </ul>
  <?php if (!is_page('sobre')) {?>
  <div class="call">
    <p>Conheça mais nossa historia</p>
    <a href="sobre.html" class="btn btn-preto">Sobre</a>
  </div>
  <?php }?>
</section>