<?php 

	function lumina_scripts(){
		wp_enqueue_style('lumina-style', get_stylesheet_uri() );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0' );
		wp_enqueue_style( 'bootstrap-responsive', get_template_directory_uri() . '/css/bootstrap-responsive.css', array(), '1.0' );
		wp_enqueue_style( 'pretty-photo', get_template_directory_uri() . '/css/prettyPhoto.css', array(), '1.0' );
		wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '1.0' );
		wp_enqueue_style( 'datepicker', get_template_directory_uri() . '/css/datepicker.css', array(), '1.0' );
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.css', array(), '1.0' );


		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '20141010', true );
		wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20141010', true );
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '20141010', true );
		wp_enqueue_script( 'prettyphoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '20141010', true );
		wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/easing.js', array(), '20141010', true );
		wp_enqueue_script( 'lazyload', get_template_directory_uri() . '/js/jquery.lazyload.js', array(), '20141010', true );
		wp_enqueue_script( 'uitotop', get_template_directory_uri() . '/js/jquery.ui.totop.js', array(), '20141010', true );
		wp_enqueue_script( 'selectnav', get_template_directory_uri() . '/js/selectnav.js', array(), '20141010', true );
		wp_enqueue_script( 'ender', get_template_directory_uri() . '/js/ender.js', array(), '20141010', true );
		wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '20141010', true );
		wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '20141010', true );

	}

	add_action( 'wp_enqueue_scripts', 'lumina_scripts' );

	add_theme_support('post-thumbnails');

	register_nav_menus( array(
		'primary' => __( 'Header Menu', 'lumina' ),
		'footer'  => __( 'Footer Menu', 'lumina' ),
	) );










 ?>