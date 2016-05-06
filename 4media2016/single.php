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
                  <p> <?php the_content(); ?> </p>
                </div>
							</article>
						<?php endwhile; ?>
					<?php
						else:
							echo "Nenhum post encontrado";
						endif ?>
						<div class="block_noticia author">
							<div class="container">
								<div class="row">
									<div class="col-md-3">
										<?php
										$email = get_the_author_email();
										$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=160";
										$usegravatar = get_option('woo_gravatar');?>
										<img src="<?php echo $grav_url; ?>" alt="" class="img-responsive" />
									</div>
									<div class="col-md-9">
										<h4><a href = "<?php the_author_url ();?>" itemprop="url"><?php the_author(); ?></a></h4>
										<?php the_author_description();?>
										<ul class="social">
											<?php if ( get_the_author_meta( 'facebookuser' ) ) { ?>
											<li><a href="<?php the_author_meta( 'facebookuser' ); ?>"><i class="icon-s-facebook"></i></a></li>
											<?php } ?>
											<?php if ( get_the_author_meta( 'googleuser' ) ) { ?>
											<li><a href="<?php the_author_meta( 'googleuser' ); ?>?rel=author"><i class="icon-s-gplus"></i></a></li>
											<?php } ?>
											<?php if ( get_the_author_meta( 'twitteruser' ) ) { ?>
											<li><a href="<?php the_author_meta( 'twitteruser' ); ?>"><i class="icon-s-twitter"></i></a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block_noticia author">
							<?php echo comments_template('comments.php') ?>
						</div>

				</div>
				<div class="col-md-3">
					<?php get_sidebar( ); ?>
				</div>
			</div>
		</div>
	</main>
<?php get_footer( );  ?>
