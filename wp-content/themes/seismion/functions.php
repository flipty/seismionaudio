<?php

//Basic Theme capabilities
add_theme_support('post-thumbnails');

// ACF Options
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

register_nav_menus(array(
	'menu-1' => esc_html__('Primary', 'mibs')
	//'menu-titles' => esc_html__('Titles Menu', 'trc'),
	//'menu-ivr' => esc_html__('Intervention Records', 'trc'),
	//'menu-resources' => esc_html__('Resources', 'trc')
));

//add_filter('xmlrpc_enabled', '__return_false');

?>
