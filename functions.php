<?php
	add_action ( 'wp_enqueque_scripts', 'theme_name_scripts');
	function theme_name_scripts() {
		wp_enqueue_style( 'style', get_stylesheet_uri(  ) );
		wp_enqueue_style( 'animate', get_template_directory_uri(  ) . './assets/js/animate.css' );
		wp_enqueue_style( 'slick', get_template_directory_uri(  ) . './assets/slick/slick.css' );
		wp_enqueue_style( 'slick_theme', get_template_directory_uri(  ) . './assets/slick/slick-theme.css' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri(  ) . './assets/css/bootstrap-grid.min.css' );
		wp_enqueue_style( 'popup', get_template_directory_uri(  ) . './assets/css/magnific-popup.css' );
		wp_enqueue_style( 'stile', get_template_directory_uri(  ) . './assets/css/style.css' );
		wp_enqueue_style( 'modal', get_template_directory_uri(  ) . './assets/css/_modal.css' );
		wp_enqueue_style( 'menu', get_template_directory_uri(  ) . './assets/css/_menu.css' );
	}