<?php
   add_action( 'wp_enqueue_scripts', function() {
	   wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
      wp_enqueue_script( 'jquery' );
	   wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
   });

   add_action('after_setup_theme', function(){
      register_nav_menu('header_menu', 'Header menu');
   });

   add_theme_support('post-thumbnails');
   add_theme_support('title-tag');

   function social_sidebar() {
		register_sidebar([
			'name' => 'main_sidebar',
			'id' => 'main_sidebar',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		]);
	}

	add_action('widgets_init', 'social_sidebar');
?>