<?php
	add_action ( 'wp_enqueque_scripts', 'theme_name_scripts');
	function theme_name_scripts() {
		wp_enqueue_style( 'style', get_stylesheet_uri(  ) );
		wp_enqueue_style( 'animate', get_template_directory_uri(  ) . './assets/js/animate.css' );
		wp_enqueue_style( 'slick', get_template_directory_uri(  ) . './assets/slick/slick.css' );
	}