<?php
/**
 * Metaboxes for UMCTHEME3
 *
 * @package umctheme3
 */



 add_filter( 'rwmb_meta_boxes', 'umctheme3_register_meta_boxes' );
 function umctheme3_register_meta_boxes( $meta_boxes )
 {
  $prefix = 'umctheme3_';

  // GET MENUS
  function get_menus(){
    global $wpdb;
    $menus = $wpdb->get_results("SELECT * FROM wp_terms AS t LEFT JOIN wp_term_taxonomy AS tt ON tt.term_id = t.term_id WHERE tt.taxonomy = 'nav_menu'");
    $formatted_theme_menus = array();
    foreach ($menus as $menu) {
      $formatted_theme_menus[$menu->term_id] = $menu->name;
    }
    return $formatted_theme_menus;
  }
  $uu_theme_menus = get_menus();

 	// META BOX
 	$meta_boxes[] = array(
 		'id'         => 'subnav_control',
 		'title'      => __( 'Subnav', 'umctheme3' ),
    'context'    => 'side',
    'priority'   => 'low',
 		'post_types' => array( 'page', 'post' ),
 		'autosave'   => true,
 		'fields'     => array(

 			// SUB MENU SELECT
      array(
        'name'            => 'Select a Menu',
        'id'              => $prefix . 'subnav_select',
        'type'            => 'select',
        'options'         => $uu_theme_menus,
        'multiple'        => false,
        'placeholder'     => 'Select a Menu',
        'select_all_none' => false,
      ),
 		)
 	);
  // END META BOX

 	return $meta_boxes;
 }
