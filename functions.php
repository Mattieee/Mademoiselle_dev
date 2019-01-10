<?php
	// j'intercale une fonction perso sur le hook 'wp_enqueue_scripts'
	add_action('wp_enqueue_scripts','custom_style_scripts');
	//add_action(hook,nom_de_la_fonction)

	function custom_style_scripts()
	{
		//ajout de feuille de style
		wp_enqueue_style('custom_style', get_stylesheet_directory_uri() . '/style.css');

		// ajout du script
		wp_enqueue_script('custom_js', get_stylesheet_directory_uri() . '/custom_js');

		wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), null, true );

wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css' );

	}
?> 