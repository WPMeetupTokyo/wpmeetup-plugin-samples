<?php
/*
Plugin Name: WP Meetup Tokyo Footer
Description: Add text to site footer.
Author: Mayo Moriyama
Version: 1.0
Author URI: http://www.meetup.com/WordPress-Meetup-Tokyo
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// Create a function.
function wpmeetup_footer () {
	echo 'Made with ❤';
}

// hook `wp_footer`
// https://codex.wordpress.org/Plugin_API/Action_Reference/wp_footer
add_action( 'wp_footer', 'wpmeetup_footer' );
