<?php

/**
 *  JobBoard child theme setup
 *
 * @since 1.0.0
 */
function jobboard_child_setup(){

	load_child_theme_textdomain( 'jobboard-child', get_stylesheet_directory() . '/langauges' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'secondary' => esc_html__( 'Secondary Menu', 'jobboard-child' ),
	) );

}
add_action( 'after_setup_theme', 'jobboard_child_setup', 15 );

/**
 *  JobBoard Child theme scripts
 *
 * @since 1.0.0
 */
function jobboard_child_scripts(){

	// Check the homepage active or not, then execute the javascript
	if( is_page_template( 'page-templates/template-homepage.php' ) ){

		// jQuery Simple Slider
		wp_enqueue_script( 'simple-slider', get_template_directory_uri().'/assets/js/simple-slider.min.js', array( 'jquery' ), '1.0.0', true  );
		wp_enqueue_script( 'simple-slider-init', get_template_directory_uri().'/assets/js/simple-slider-init.js', array( 'jquery' ), '1.0.0', true  );
		wp_enqueue_style( 'simple-slider', get_template_directory_uri().'/assets/css/simple-slider.css', '1.0', 'all' );
		wp_enqueue_style( 'simple-slider-volume', get_template_directory_uri().'/assets/css/simple-slider-volume.css', '1.0', 'all' );

		// jQuery Uniform
		wp_enqueue_script( 'uniform', get_template_directory_uri().'/assets/js/jquery.uniform.min.js', array( 'jquery' ), '2.1.2', true);
		wp_enqueue_script( 'uniform-init', get_template_directory_uri().'/assets/js/jquery.uniform.init.js', array( 'jquery' ), '2.1.2', true);
		wp_enqueue_style( 'uniform-default', get_template_directory_uri().'/assets/css/jquery-uniform/default/css/uniform.default.min.css', '2.1.2', 'all' );

		$slider_init = true;

		// Homepage Image Slider
		$slider_settings = array(
			'auto_play'			=> jobboard_option('slider_auto_slide'),
			'auto_play_timeout'	=> jobboard_option('slider_delay'),
			'animate_in'		=> jobboard_option('slider_entrance_animation'),
			'animate_out'		=> jobboard_option('slider_exit_animation'),
		);

		wp_localize_script( 'theme-js', 'home_slider', $slider_settings );
		wp_localize_script( 'theme-js', 'slider', array( 'init' => $slider_init, 'home_init' => $slider_init ) );

	}else{
		$slider_init = false;
	}


	wp_enqueue_script( 'jobboard-child', get_stylesheet_directory_uri() . '/js/jobboard-child.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'jobboard_child_scripts', 15 );

function jobboard_child_remove_page_templates( $page_templates ) {
	unset( $page_templates['page-templates/template-homepage.php'] );
	return $page_templates;
}
add_filter( 'theme_page_templates', 'jobboard_child_remove_page_templates' );
