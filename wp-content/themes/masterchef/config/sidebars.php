<?php
/**
 * Sidebars configuration.
 *
 * @package Masterchef
 */

add_action( 'after_setup_theme', 'masterchef_register_sidebars', 5 );
function masterchef_register_sidebars() {

	masterchef_widget_area()->widgets_settings = apply_filters( 'tm_widget_area_default_settings', array(
		'sidebar' => array(
			'name'           => esc_html__( 'Sidebar Primary', 'masterchef' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h4 class="widget-title">',
			'after_title'    => '</h4>',
			'before_wrapper' => '<div id="%1$s" %2$s role="complementary">',
			'after_wrapper'  => '</div>',
			'is_global'      => true,
		),
		'footer-full-width-area' => array(
			'name'           => esc_html__( 'Footer Fullwidth Area', 'masterchef' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h2 class="widget-title">',
			'after_title'    => '</h2>',
			'before_wrapper' => '<section id="%1$s" %2$s>',
			'after_wrapper'  => '</section>',
			'is_global'      => true,
		),
		'footer-area' => array(
			'name'           => esc_html__( 'Footer Area', 'masterchef' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h5 class="widget-title">',
			'after_title'    => '</h5>',
			'before_wrapper' => '<section id="%1$s" %2$s>',
			'after_wrapper'  => '</section>',
			'is_global'      => true,
		),
		'custom-area' => array(
			'name'           => esc_html__( 'Custom Area', 'masterchef' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h2 class="widget-title">',
			'after_title'    => '</h2>',
			'before_wrapper' => '<section id="%1$s" %2$s>',
			'after_wrapper'  => '</section>',
			'is_global'      => true,
		),
	) );
}
