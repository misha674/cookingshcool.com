<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Masterchef
 */

?>

<div class="footer-full-width-area-wrap">
	<div class="container">
		<?php
		if ( !is_404() ) {
			do_action( 'masterchef_render_widget_area', 'footer-full-width-area' );
		}
		?>
	</div>
</div>

<div class="footer-area-wrap invert">
	<div class="container">
		<?php do_action( 'masterchef_render_widget_area', 'footer-area' ); ?>
		<?php masterchef_social_list( 'footer' ); ?>
	</div>
</div>

<div class="footer-container">
	<div <?php echo masterchef_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<div class="site-info__mid-box">
			<?php masterchef_footer_copyright(); ?>
			<?php masterchef_footer_menu(); ?>
		</div>
	</div><!-- .site-info -->
</div><!-- .container -->
