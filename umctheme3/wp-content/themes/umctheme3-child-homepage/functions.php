<?php
add_action( 'wp_enqueue_scripts', 'umctheme3_homepage_enqueue_styles' );
function umctheme3_homepage_enqueue_styles() {
	wp_enqueue_style( 'uu-homepage-style', get_template_directory_uri() . '/style.css' );

	// Homepage Custom CSS & JS
	wp_enqueue_style( 'uu-jusicer-style', 'https://assets.juicer.io/embed.css', array(), '', 'all' );
	wp_enqueue_script( 'uu-juicer-js', 'https://assets.juicer.io/embed.js', array(), '1.0.0', true );

	wp_enqueue_style( 'flickity-style', get_stylesheet_directory_uri() . '/css/vendor/flickity.css', array(), '', 'all' );
	wp_enqueue_script( 'flickity', get_stylesheet_directory_uri() . '/js/vendor/flickity.min.js', array(), '', true );

	wp_enqueue_style( 'uu-homepage-custom-style', get_stylesheet_directory_uri() . '/css/custom.css', array(), '', 'all' );
	wp_enqueue_script( 'uu-homepage-custom-script', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );

	// Major Finder JS
	wp_enqueue_script( 'uu-home-page-script', get_stylesheet_directory_uri() . '/majorFinder/uu-homepage.js', array('jquery'), '1.0.0', true );

	$plugin_url = plugin_dir_url( __FILE__ );
	$plugin_url = get_stylesheet_directory_uri();

	$dataToBePassed = array(
	'uuAjaxUrl' => $plugin_url,
	);

	wp_localize_script( 'uu-home-page-script', 'uuLocalizedVars', $dataToBePassed );
}



 ?>
