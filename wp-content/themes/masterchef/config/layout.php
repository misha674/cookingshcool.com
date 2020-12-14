<?php
/**
 * Layout configuration.
 *
 * @package Masterchef
 */

add_action( 'after_setup_theme', 'masterchef_set_layout', 5 );
function masterchef_set_layout() {

	masterchef_theme()->layout = array(
		'one-right-sidebar' => array(
			'1/3' => array(
				'content' => array( 'col-md-12', 'col-lg-8' ),
				'sidebar' => array( 'col-md-12', 'col-lg-4' ),
			),
			'1/4' => array(
				'content' => array( 'col-md-12', 'col-lg-9' ),
				'sidebar' => array( 'col-md-12', 'col-lg-3' ),
			),
		),
		'one-left-sidebar' => array(
			'1/3' => array(
				'content' => array( 'col-xs-12', 'col-md-8', 'col-md-push-4' ),
				'sidebar' => array( 'col-xs-12', 'col-md-4', 'col-md-pull-8' ),
			),
			'1/4' => array(
				'content' => array( 'col-xs-12', 'col-md-9', 'col-md-push-3' ),
				'sidebar' => array( 'col-xs-12', 'col-md-3', 'col-md-pull-9' ),
			),
		),
		'two-sidebars' => array(
			'1/3' => array(
				'content' => array( 'col-xs-12', 'col-md-4' ),
				'sidebar' => array( 'col-xs-12', 'col-md-4' ),
			),
			'1/4' => array(
				'content' => array( 'col-xs-12', 'col-md-6' ),
				'sidebar' => array( 'col-xs-12', 'col-md-3' ),
			),
		),
		'fullwidth' => array(
			array(
				'content' => array( 'col-xs-12', 'col-md-12' ),
			),
		),
	);
}
