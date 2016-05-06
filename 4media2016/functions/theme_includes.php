<?php
if(!is_admin()){
	/* CSS */
	wp_enqueue_style( 'Bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(),'3.3.6', 'screen' );
	wp_enqueue_style( 'Font Awesome', get_template_directory_uri().'/css/font-awesome.css', array(),'4.5.0', 'screen' );
	wp_enqueue_style( 'slick', get_template_directory_uri().'/css/slick.css', array(),'1.5.9', 'screen' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri().'/css/slick-theme.css', array(),'1.5.9', 'screen' );
	wp_enqueue_style( 'tether', get_template_directory_uri().'/css/tether.css', array(),'1.5.9', 'screen' );
	wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css', array(),'3.5.1', 'screen' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri().'/css/owl.carousel.css', array(),'3.5.1', 'screen' );
	wp_enqueue_style( 'owl.transitions', get_template_directory_uri().'/css/owl.transitions.css', array(),'3.5.1', 'screen' );
	wp_enqueue_style( 'fontello', get_template_directory_uri().'/css/fontello.css', array(),'3.5.1', 'screen' );
	wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array(),'1.0.0', 'screen' );

	/* JS */
	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-1.12.3.min.js', array(), '1.12.1', false );
	wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.js', array(),'1.5.9', true );
	wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '3.3.5', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array(),'1.5.9', true );
	wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array(),'1.5.9', true );
	wp_enqueue_script( 'WOW', get_template_directory_uri() . '/js/wow.js', array(),'1.1.2', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.js', array(),'3.6.8', true );
	wp_enqueue_script( 'nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', array(),'3.0.0', true );
	wp_enqueue_script( 'Funções', get_template_directory_uri() . '/js/funcoes.js', array(), '1.0.0', true );
}

?>
