<?php
/**
 * Template part for top panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Masterchef
 */

// Don't show top panel if all elements are disabled.
if ( ! masterchef_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel">
	<div <?php echo masterchef_get_container_classes( array( 'top-panel__wrap' ), 'header' ); ?>><?php
		masterchef_top_message( '<div class="top-panel__message">%s</div>' );
		masterchef_top_search( '<div class="top-panel__search">%s</div>' );
		masterchef_top_menu();
	?></div>
</div><!-- .top-panel -->