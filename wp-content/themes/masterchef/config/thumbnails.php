<?php
/**
 * Thumbnails configuration.
 *
 * @package Masterchef
 */

add_action( 'after_setup_theme', 'masterchef_register_image_sizes', 5 );
function masterchef_register_image_sizes() {
	set_post_thumbnail_size( 540, 510, true );

	// Registers a new image sizes.
	add_image_size( 'masterchef-thumb-s', 150, 150, true );
	add_image_size( 'masterchef-thumb-l', 1280, 510, true );
	add_image_size( 'masterchef-author-avatar', 512, 512, true );

	add_image_size( 'masterchef-thumb-560-390', 560, 390, true );
}
