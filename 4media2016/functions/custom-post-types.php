<?php
/* ----------------------------------------------------- */
/* Post Types */
/* ----------------------------------------------------- */
/* Criando um Post Type Personalizado */
add_action('init', 'portfolio_register');
function portfolio_register() {
	 $labels = array(
			'name' => 'Portfolio',
			'singular_name' => 'Post',
			'all_items' => 'Todos Portfolio',
			'add_new' => 'Adicionar Portfolio',
			'add_new_item' => 'Adicionar Portfolio',
			'edit_item' => 'Editar Portfolio',
			'new_item' => 'Novo Portfolio',
			'view_item' => 'Ver Portfolio',
			'search_items' => 'Procurar Portfolio',
			'not_found' =>  'Nada encontrado',
			'not_found_in_trash' => 'Nada encontrado no lixo',
			'parent_item_colon' => '',
			'menu_icon'   => 'teste',
	);
	$args = array(
 			'menu_icon' => 'dashicons-portfolio',
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'has_archive' => true,
			'taxonomy' => array('categoria-portfolio'),
			'menu_position' => 6,
			'supports' => array('title','editor','comments','thumbnail','category','gallery','page-attributes'),
			'rewrite' => array('slug' => 'portfolio')
	  );
	register_post_type('portfolio',$args);
}

register_taxonomy("categoria-portfolio", array("portfolio"),
	array(
		"hierarchical" => true,
		"label" => "categoria Portfolio",
		"singular_label" => "categoria Portfolio",
		'rewrite' => array( 'slug' => 'categoria-portfolio' )
	)
);

?>
