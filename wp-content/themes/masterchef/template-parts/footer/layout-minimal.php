<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Masterchef
 */
?>

<div class="footer-container">
	<div <?php echo masterchef_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<div class="site-info__mid-box">
			<?php masterchef_footer_copyright(); ?>
			<?php masterchef_footer_menu(); ?>
			<?php masterchef_social_list( 'footer' ); ?>
		</div>
	</div><!-- .site-info -->
</div><!-- .container -->
