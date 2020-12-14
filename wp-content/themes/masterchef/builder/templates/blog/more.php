<?php
/**
 * Template for displaying read more button
 */

tm_builder_core()->utility()->attributes->get_button( array(
	'text'      => esc_html__( 'More', 'masterchef' ),
	'icon'      => '<i class="material-icons">keyboard_arrow_right</i>',
	'class'     => 'more-link',
	'html'      => '<a href="%1$s" %3$s><span class="link__text">%4$s</span>%5$s</a>',
	'echo'      => true,
) );
?>