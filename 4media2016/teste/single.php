  <?php get_header(); ?>
      <main>
      
     
      
      <!-- ============================================================= SECTION – BLOG POST ============================================================= -->
      
      <section id="blog-post" class="light-bg">
        <div class="container inner-top-sm inner-bottom classic-blog">
          <div class="row">
            
            <div class="col-md-9 inner-right-sm">
              <div class="sidemeta">
                <?php 
        // Instrução condicional para verfificar se existem posts
        if( have_posts() ): 
        ?>
        
        <?php 
        // Instrução de repetição para exibir os posts
        while( have_posts() ): the_post(); 
        ?>

                <div class="post format-gallery">
                  
                  <div class="date-wrapper">
                    <div class="date">
                      <span class="day"><?php the_time('d'); ?></span>
                      <span class="month"><?php the_time('M'); ?></span>
                    </div><!-- /.date -->
                  </div><!-- /.date-wrapper -->
                  
                 <!--  <div class="format-wrapper">
                    <a href="#"><i class="icon-picture"></i></a>
                  </div> <!-- /.format-wrapper -->
                  

                  <div class="post-content">
                    
                    <div id="owl-work" class="owl-inner-pagination owl-inner-nav post-media">
                      
                      <div class="item">
                        <figure>
                          <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive img-thumbnail' ) ); ?>
                        </figure>
                      </div><!-- /.item -->
                      
                      
                      
                    </div><!-- /.owl-carousel -->
                    
                    <!--<p class="author"><a href="#" title="Post author" data-rel="tooltip" data-placement="left">Amber Jones</a></p> -->
                    
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    
                    <ul class="meta" style="margin-botton:20px;">
                      <li class="categories">
                        <?php
                        $categoria = get_the_category();
                        $nomeCategoria = $categoria[0]->cat_name;
                        echo $nomeCategoria;
                        ?>  
                      </li>
                      <li class="comments"><?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?></li>                    
                    </ul><!-- /.meta -->
                    <div class="clearfix" style="margin-bottom:30px"></div>
                    <?php the_content(); ?> 
                   
                  </div><!-- /.post-content -->
                  
                </div><!-- /.post -->
                <div class="clearfix"></div>
                <div class="post-author">
                  <figure>
                  <h3>Sobre o autor:</h3>
                    
                    <div class="author-image icon-overlay icn-link">
                      <?php $email = get_the_author_email(); $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] ); 
                      $usegravatar = get_option('woo_gravatar');?>
                      <img src="<?php echo $grav_url; ?>" alt="" width="80" height="80" class="img-responsive" />
                    </div>
                    
                    <figcaption class="author-details">
                      <div class="autor">
                      
                      <div class="autorcontent">
                        <div class="nomeautor"><a href = "<?php the_author_url ();?>" itemprop="url"><?php the_author(); ?></a></div>
                        <div class="texto"><?php the_author_description ();?></div>
                      </div>
                      
                      <div class="redesautor">
                        <ul class="meta">
                          <!--<li class="author-posts"><a href="<?php the_author_url ();?>">Todos os posts de <?php the_author(); ?></a></li>-->
                          <?php if(get_the_author_url ()){ ?>
                          <li class="url"><a href="<?php the_author_url (); ?>" target="_blank"><?php the_author_url (); ?></a></li>
                          <?php } ?>
                        </ul><!-- /.meta -->

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
                      <div class="clearfix"></div>
                      </div>
                    
                  </figure>
                  <div class="clearfix"></div>
                </div><!-- /.post-author -->
                
                <?php 
                // Finalizando a instrução de repetição
                endwhile; 
                ?>

                <?php 
                // Se não forem encontrados posts
                else:
                  echo 'Nenhuma página foi encontrada!';
                endif; // Finalizando a instrução condicional
                ?> 

                <div id="share" class="row">
                  
                  <div class="col-sm-4 reset-padding">


                    <!-- <div class="btn-share-md fb-share-button" data-href="<?php echo get_permalink(); ?>" data-layout="box_count"></div> -->


                    <a href="#" onclick="window.open('http://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>&t=<?php echo the_title() ?>', 
                                'facebook-share-dialog', 
                                'width=626,height=436'); 
                                return false;"  class="btn-share-md">
                      <p class="name">Facebook</p>
                      <i class="icon-s-facebook"></i>
                      <p class="counter"></p>
                    </a>

                  </div><!-- /.col -->
                  
                  <div class="col-sm-4 reset-padding">
                    <a href="#" class="btn-share-md"  onclick="window.open('http://twitter.com/share?text=<?php echo the_title() ?>&url=<?php echo get_permalink(); ?>&counturl=<?php echo get_permalink(); ?>', 
                                'facebook-share-dialog', 
                                'width=626,height=436'); 
                                return false;" >
                      <p class="name">Twitter</p>
                      <i class="icon-s-twitter"></i>
                      <p class="counter"></p>
                    </a>
                  </div><!-- /.col -->
                  
                  <div class="col-sm-4 reset-padding">
                    <a href="#" class="btn-share-md"  onclick="window.open('https://plus.google.com/share?url=<?php echo get_permalink() ?>', 
                                'facebook-share-dialog', 
                                'width=626,height=436'); 
                                return false;">
                      <p class="name">Google +</p>
                      <i class="icon-s-gplus"></i>
                      <p class="counter"></p>
                    </a>
                  </div><!-- /.col -->
                  
                </div><!-- /.share -->


                <div class="post-author">
                <?php comments_template(); ?>
                </div>
              </div><!-- /.sidemeta -->
            </div><!-- /.col -->
            
            <aside class="col-md-3">
              <?php get_sidebar("right-bar"); ?>              
            </aside>
            
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section>
      
      <!-- ============================================================= SECTION – BLOG POST : END ============================================================= -->
      
    </main>
<?php get_footer() ?>