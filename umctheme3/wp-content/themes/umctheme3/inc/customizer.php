<?php
/**
 * umctheme3 Theme Customizer
 *
 * @package umctheme3
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function umctheme3_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'umctheme3_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'umctheme3_customize_partial_blogdescription',
			)
		);
	}

	// REMOVE UNUSED SETTINGS
	$wp_customize->remove_section('colors');
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('background_image');
	$wp_customize->remove_section('custom_css');

	// ADD ALERT BAR SETTINGS
	$wp_customize->add_section(
		'alert-bar',
		array(
			'title' => __( 'Alert Bar', 'umctheme3' ),
			'priority' => 30,
			'description' => __( 'Alert Bar', 'umctheme3' )
		)
	);

	// ENABLE ALERT BAR
	$wp_customize->add_setting('alert_bar_enable', array( 'default' => false ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'alert_bar_enable', array( 'label' => __( 'Enable Alert Bar', 'umctheme3' ), 'type' => 'checkbox', 'section' => 'alert-bar', 'settings' => 'alert_bar_enable', ) ) );
	// ALERT BAR MESSAGE
	$wp_customize->add_setting('alert_bar_message', array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'alert_bar_message', array( 'label' => __( 'Alert Bar Message', 'umctheme3' ), 'type' => 'textarea', 'section' => 'alert-bar', 'settings' => 'alert_bar_message', ) ) );
	// ALERT BAR URL
	$wp_customize->add_setting('alert_bar_url', array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'alert_bar_url', array( 'label' => __( 'Alert Bar URL', 'umctheme3' ), 'type' => 'url', 'section' => 'alert-bar', 'settings' => 'alert_bar_url', ) ) );

	// ADD TRACKING PIXELS
	$wp_customize->add_section(
		'tracking-pixels',
		array(
			'title' => __( 'Tracking Pixels', 'umctheme3' ),
			'priority' => 30,
			'description' => __( 'Tracking Pixels', 'umctheme3' )
		)
	);
	// GTM PIXEL ID
	$wp_customize->add_setting('gtm_pixel_id', array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gtm_pixel_id', array( 'label' => __( 'Google Tag Manager Pixel Id', 'umctheme3' ), 'section' => 'tracking-pixels', 'settings' => 'gtm_pixel_id', ) ) );
	// Facebook PIXEL ID
	$wp_customize->add_setting('facebook_pixel_id', array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_pixel_id', array( 'label' => __( 'Facebook Pixel Id', 'umctheme3' ), 'section' => 'tracking-pixels', 'settings' => 'facebook_pixel_id', ) ) );


	// ADD DEPARTMENT SETTINGS
	$wp_customize->add_section(
		'department',
		array(
			'title' => __( 'Department Settings', 'umctheme3' ),
			'priority' => 30,
			'description' => __( 'Department Settings', 'umctheme3' )
		)
	);

	// DEPARTMENT LOGO
	$wp_customize->add_setting('dept-logo', array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'dept-logo', array('label' => __( 'Department Logo', 'umctheme3' ), 'description'  => __( 'For best results use 200px w by 50px h png or svg. Logo will be automatically sized to fit these dimensions.'), 'section' => 'department', 'mime_type' => 'image', 'settings' => 'dept-logo', ) ) );

	// DEPARTMENT ADDRESS
	$wp_customize->add_setting('dept-address1', array( 'default' => '201 PRESIDENTS CIRCLE' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dept-address1', array( 'label' => __( 'Department Address Line 1', 'umctheme3' ), 'type' => 'text', 'section' => 'department', 'settings' => 'dept-address1', ) ) );
	$wp_customize->add_setting('dept-address2', array( 'default' => 'SALT LAKE CITY, UT 84112' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dept-address2', array( 'label' => __( 'Department Address Line 2', 'umctheme3' ), 'type' => 'text', 'section' => 'department', 'settings' => 'dept-address2', ) ) );

	// DEPARTMENT PHONE NUMBER
	$wp_customize->add_setting('dept-phone', array( 'default' => '801-581-7200' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dept-phone', array( 'label' => __( 'Department Phone Number', 'umctheme3' ), 'type' => 'text', 'section' => 'department', 'settings' => 'dept-phone', ) ) );


	// ADD SOCILA MEDIA SECTION
	$wp_customize->add_section(
		'social-media',
		array(
			'title' => __( 'Social Media Links', 'umctheme3' ),
			'priority' => 30,
			'description' => __( 'Enter your social media URLs', 'umctheme3' )
		)
	);

	// SOCIAL MEDIA FIELDS
	$wp_customize->add_setting('twitter', array( 'default' => 'https://twitter.com/uutah' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array( 'label' => __( 'Twitter', 'umctheme3' ), 'section' => 'social-media', 'settings' => 'twitter', ) ) );

	$wp_customize->add_setting('facebook', array( 'default' => 'https://www.facebook.com/universityofutah' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array( 'label' => __( 'Facebook', 'umctheme3' ), 'section' => 'social-media', 'settings' => 'facebook', ) ) );

	$wp_customize->add_setting('instagram', array( 'default' => 'https://www.instagram.com/universityofutah/' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'intagram', array( 'label' => __( 'Instagram', 'umctheme3' ), 'section' => 'social-media', 'settings' => 'instagram', ) ) );

	$wp_customize->add_setting('youtube', array( 'default' => 'https://www.youtube.com/user/theuniversityofutah' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube', array( 'label' => __( 'YouTube', 'umctheme3' ), 'section' => 'social-media', 'settings' => 'youtube', ) ) );

	$wp_customize->add_setting('pintrest', array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pintrest', array( 'label' => __( 'Pintrest', 'umctheme3' ), 'section' => 'social-media', 'settings' => 'pintrest', ) ) );

	$wp_customize->add_setting('linkedin', array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin', array( 'label' => __( 'LinkedIn', 'umctheme3' ), 'section' => 'social-media', 'settings' => 'linkedin', ) ) );

}
add_action( 'customize_register', 'umctheme3_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function umctheme3_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function umctheme3_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function umctheme3_customize_preview_js() {
	wp_enqueue_script( 'umctheme3-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'umctheme3_customize_preview_js' );
