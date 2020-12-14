<?php
/**
 * Menus configuration.
 *
 * @package Masterchef
 */

add_action( 'after_setup_theme', 'masterchef_register_menus', 5 );
function masterchef_register_menus() {

	// This theme uses wp_nav_menu() in four locations.
	register_nav_menus( array(
		'top'    => esc_html__( 'Top', 'masterchef' ),
		'main'   => esc_html__( 'Main', 'masterchef' ),
		'footer' => esc_html__( 'Footer', 'masterchef' ),
		'social' => esc_html__( 'Social', 'masterchef' ),
	) );
}
