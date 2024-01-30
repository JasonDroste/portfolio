<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

add_action('fl_after_content', 'odw_do_footer_rows');
function odw_do_footer_rows(){
	if(!is_front_page()):
		echo do_shortcode('[fl_builder_insert_layout slug="footer-widgets"]');
		echo do_shortcode('[fl_builder_insert_layout slug="footer"]');
	endif;
}