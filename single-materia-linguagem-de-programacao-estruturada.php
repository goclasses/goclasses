<?php 
  get_header(); 
?>

  <!-- Carrossel Começa -->
  <section class="carrossel carrossel-lpe">
      <div class="noticia">
      <section class="container sobre-inicio">
        <div class="grid-7">
          <h1>Linguagem de Programação Estruturada</h1>
          <p>"A linguagem C é uma das mais bem sucedidas linguagens de alto nível já criadas e é considerada uma das linguagens de programação mais utilizadas de todos os tempos."</p>
          <p class="autor-frase-materia">- André Backes</p>
        </div>
        <div class="grid-5">
          <div class="logo-sobre">
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner-lpe.png" alt="Logo do site GoClasses">
          </div>
        </div>
      </section>
      </div>
  </section>
  <!-- Carrossel termina -->

  <div class="post-types-container">
    <nav>
      <ul>
        <li><a href="<?php echo get_post_type_archive_link( 'material_de_apoio' ) . '?mat=linguagem-de-programacao-estruturada'; ?>">Material de Apoio</a></li>
        <li><a href="<?php echo get_post_type_archive_link( 'exercicio' ) . '?mat=linguagem-de-programacao-estruturada'; ?>">Exercícios</a></li>
        <li><a href="<?php echo get_post_type_archive_link( 'projeto' ) . '?mat=linguagem-de-programacao-estruturada'; ?>">Projetos</a></li>
      </ul>
    </nav>
  </div>

  <!-- post  -->
  <div class="container">
    <?php
      $archiveConteudo = new WP_Query(array(
        'post_type' => 'material',
        'category_name' => 'linguagem-de-programacao-estruturada',
        'order' => 'ASC',
        'orderby' => 'title',
        'posts_per_page' => -1,
      ));
      if($archiveConteudo->have_posts()){
    
        while($archiveConteudo->have_posts()) {
          $archiveConteudo->the_post(); 
    ?>

      <div class="post-page">
        <div class="grid-12">
          <div class="info-index-material">
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
          </div>
        </div>
      </div>
    <?php }} else { ?>
      <div class="imagem-sem-conteudo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/no-data-amico.svg" alt="">
      </div>
    <?php } ?>
  </div>

<?php get_footer(); ?> 