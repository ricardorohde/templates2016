<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php wp_head() ?>
    <title><?php
	      if ( is_single() ) {
	        bloginfo('name'); echo " | "; single_post_title();
	      }elseif ( is_home() || is_front_page() ) {
	        bloginfo('name'); echo ' | ';
	        bloginfo('description');
	      }elseif ( is_page() ) {
	        single_post_title('');
	      }elseif ( is_search() ) {
	        bloginfo('name');
	        echo ' | Search results for ' . wp_specialchars($s);
	      }elseif ( is_404() ) {
	        bloginfo('name');
	        print ' | Not Found';
	      }else {
	        bloginfo('name');
	        wp_title('|');
	      }
      	?></title>
  </head>
  <body>
    <header>
      <div class="bartop">
        <div class="container">
          <div class="pull-xs-left contato-top">
            <i class="fa fa-envelope" aria-hidden="true"></i> atendimento@4media.com.br <i class="fa fa-phone fa-top" aria-hidden="true"></i> (31) 3786-6400
          </div>
          <ul class="social pull-xs-right">
            <li><a href="https://www.facebook.com/agencia4media" target="_blank"><i class="icon-s-facebook"></i></a></li>
            <li><a href="https://plus.google.com/u/0/109825502856405512802/posts " target="_blank"><i class="icon-s-gplus"></i></a></li>
            <li><a href="https://twitter.com/4media_brasil" target="_blank"><i class="icon-s-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/company/2906134?trk=prof-0-ovw-curr_pos" target="_blank"><i class="icon-s-linkedin"></i></a></li>
            <li><a href="https://www.youtube.com/user/agencia4media" target="_blank"><i class="icon-s-youtube"></i></a></li>
            <li><a href="https://instagram.com/4mediacomunicacao/" target="_blank"><i class="icon-s-instagram"></i></a></li>
          </ul>
        </div>
      </div>
      <nav id="navbar-topo" class="navbar navbar-full navbar-4media bg-faded">
        <div class="container">
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" /></a>
          <button class="navbar-toggler hidden-sm-up pull-xs-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
            &#9776;
          </button>
          <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <ul class="nav navbar-nav pull-xs-right nav4media nav-fale">
              <li class="nav-item menu-consultor active">
                <a href="#fale-consultor" data-toggle="modal" data-target="#fale-consultor">Fale com um Consultor</a>
              </li>
            </ul>
            <?php
  		    	$args = array(
  		    		'menu' => 'principal',
  		    		'menu_class' => 'nav navbar-nav pull-xs-right nav4media',
  		    		'walker'	 => new BootstrapNavMenuWalker()
  		    	);
  		    	wp_nav_menu( $args ); ?>
          </div>
        </div>
      </nav>
    </header>


    <!-- Modal -->
    <div class="modal fade" id="fale-consultor" tabindex="-1" role="dialog" aria-labelledby="Fale Com Consultor" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Formulário consultor') ) :?>
                <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
