<?php
    add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
    function theme_name_scripts() {
        wp_enqueue_style( 'style', get_stylesheet_uri(  ));
        wp_enqueue_style( 'main-style', get_template_directory_uri(  ) . '/assets/css/style.css' ); 
        wp_enqueue_style( 'bootstrap', get_template_directory_uri(  ) . '/assets/css/bootstrap-grid.min.css' ); 
        wp_enqueue_style( 'header', get_template_directory_uri(  ) . '/assets/css/_header.css' );
        wp_enqueue_style( 'modal', get_template_directory_uri(  ) . '/assets/css/_modal.css' );
        wp_enqueue_style( 'menu', get_template_directory_uri(  ) . '/assets/css/_menu.css' );
        wp_enqueue_style( 'main', get_template_directory_uri(  ) . '/assets/css/_main.css' );
        wp_enqueue_style( 'animate', get_template_directory_uri(  ) . '/assets/js/animate.css' );
        wp_enqueue_style( 'slick', get_template_directory_uri(  ) . '/assets/slick/slick.css' ); 
        wp_enqueue_style( 'slick_theme', get_template_directory_uri(  ) . '/assets/slick/slick-theme.css' );
        wp_enqueue_style( 'features', get_template_directory_uri(  ) . '/assets/css/_features.css' );
        wp_enqueue_style( 'production', get_template_directory_uri(  ) . '/assets/css/_production.css' );
        wp_enqueue_style( 'order', get_template_directory_uri(  ) . '/assets/css/_order.css'  );
        wp_enqueue_style( 'products', get_template_directory_uri(  ) . '/assets/css/products.css' );
        wp_enqueue_style( 'customers', get_template_directory_uri(  ) . '/assets/css/_customers.css' );
        wp_enqueue_style( 'feedback', get_template_directory_uri(  ) . '/assets/css/_feedback.css' );
        wp_enqueue_style( 'contacts', get_template_directory_uri(  ) . '/assets/css/_contacts.css' );
        wp_enqueue_style( 'footer', get_template_directory_uri(  ) . '/assets/css/_footer.css' );
        wp_enqueue_style( '_media', get_template_directory_uri(  ) . '/assets/css/_media.css' );
        wp_enqueue_style( 'gfonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap' );
        wp_enqueue_style( 'popup', get_template_directory_uri(  ) . '/assets/css/magnific-popup.css' );
    }


    // Регистрация jQuery
    // add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
    // function jquery_script_method() {
	//     wp_deregister_script( 'jquery' );
	//     wp_register_script( 'jquery', get_template_directory_uri(  ) . '/assets/js/jquery-3.3.1.min.js', false, null, true );
	//     wp_enqueue_script( 'jquery' );
    // }
    // add_action( 'wp_enqueue_scripts', 'slick_scripts' );
    //     function slick_scripts() {
    //     wp_enqueue_script( 'slick-slider', get_template_directory_uri(  ) . '/assets/slick/slick.min.js', array( 'jquery' ), null, true );
    // }
    // Регистрация используемых скриптов   
    // add_action( 'wp_enqueue_scripts', 'theme_scripts' );
    // function theme_scripts( ) {
    //     wp_enqueue_script( 'slick', get_template_directory_uri(  ) . '/assets/slick/slick.min.js', false, null );
         wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', false, null );
    //     wp_enqueue_script( 'phone_mask', get_template_directory_uri(  ) . '/assets/js/jquery.maskedinput.min.js', false, null );
    //     //wp_enqueue_script( 'magnific-popup', get_template_directory_uri(  ) . '/assets/js/jquery.magnific-popup.js', false, null );
    // }
?>