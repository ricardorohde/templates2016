<?php get_header( ); ?>
	<main class="noticia">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<?php if (have_posts()): ?>
						<?php while(have_posts()): the_post(); ?>
							<article class="block_noticia">
								<?php if (has_post_thumbnail()): ?>
									<div class="img-noticia">
										<a href="<?php the_permalink(); ?>">  <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?></a>
									</div>
								<?php endif ?>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(  ); ?></a></h2>
								<div class="info-adicional">
		              				<div class="pull-left">
										<i class="fa fa-calendar-o"></i> <?php the_time('j  F,  Y'); ?> |
										<!--<i class="fa fa-user"></i> <?php  the_author(); ?> |-->
										<i class="fa fa-comment-o"></i> <?php comments_number('Nenhum comentário', '1 comentário', '% comentários'); ?>
									</div>
									<div class="pull-right">
										Categoria: <?php the_category(' | '); ?>
									</div>
									<div class="clearfix"></div>
								</div>
                <div class="desc-block">
                  <p> <?php the_excerpt_limit(60); ?> </p>
  								<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block"> Leia Mais <i class="fa fa-plus-circle"></i> </a>
                </div>
							</article>
						<?php endwhile; ?>
					<?php
						else:
							echo "Nenhum post encontrado";
						endif ?>
						<?php wp_pagination() ?>
				</div>
				<div class="col-md-3">
					<?php get_sidebar( ); ?>
				</div>
			</div>
		</div>
	</main>
<?php get_footer( );  ?>
