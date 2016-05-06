<?php get_header() ?>
<section class="pagina-interna">
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post();
    ?>
      <section class="titulo-paginas">
        <div class="container">
          <h1><?php the_title() ?></h1>
        </div>
      </section>
      <div class="container">
      <?php the_content(); ?>
      </div>
    <?php
    endwhile ?>
  <?php endif; ?>
</section>
<?php get_footer() ?>
