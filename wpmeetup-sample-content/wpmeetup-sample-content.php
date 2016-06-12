<?php
/*
Plugin Name: WP Meetup Tokyo Content
Description: Add text to post content.
Author: Mayo Moriyama
Version: 1.0
Author URI: http://www.meetup.com/WordPress-Meetup-Tokyo
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// Create a function.
function wpmeetup_content ( $content ) {
	$text = '<p>Made with ❤</p>';
	$content = $content . $text;

	return	$content;
}

// hook `the_content`
// https://codex.wordpress.org/Plugin_API/Filter_Reference/the_content
add_filter( 'the_content', 'wpmeetup_content' );
