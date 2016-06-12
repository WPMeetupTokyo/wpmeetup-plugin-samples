<?php
/*
Plugin Name: WP Meetup Tokyo Add Custom Taxonomy
Description: Add Custom Taxonomy
Author: Mayo Moriyama
Version: 1.0
Author URI: http://www.meetup.com/WordPress-Meetup-Tokyo
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/*
 * Registering a taxonomy
 * Source: https://codex.wordpress.org/Taxonomies#Registering_a_taxonomy
 */
function wpmeetup_custom_x () {
	// create a new taxonomy
	register_taxonomy(
		'people',
		'post',
		array(
			'label' => __( 'People' ),
			'rewrite' => array( 'slug' => 'person' ),
			'capabilities' => array(
				'assign_terms' => 'edit_guides',
				'edit_terms' => 'publish_guides'
			)
		)
	);
}

add_action( 'init', 'wpmeetup_custom_x' );
