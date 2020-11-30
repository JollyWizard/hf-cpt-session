<?php

/*
Plugin Name:  Higher Forces CPT - Session
Description:  Adds custom post type `Session`
Version:      0.2
Author:       James Arlow
License:      GPL2
*/

/*
  This template was generated using CPT-UI plugin.

  Modifications noted below.
*/
function cptui_register_my_cpts_session() {

	/**
	 * Post Type: session.
	 */

	$labels = array(
		"name" => __( 'Sessions', '' ),
		"singular_name" => __( 'Session', '' ),
	);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"hierarchical" => false,
		"query_var" => true,

    /* added 2018-07-09 to re-enable category options in menu / classic archive template. */
    'taxonomies'  => array( 'category' ),

    "supports" => array( "title", "editor", "custom-fields" )
	);

	register_post_type( "session", $args );
}
add_action( 'init', 'cptui_register_my_cpts_session' );
/* End CPT-UI export */
