<?php
/**
 * Template part for centered Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Masterchef
 */
?>

<div class="header-container__flex">
	<div class="header-container__center">
		<div class="site-branding">
			<?php masterchef_header_logo() ?>
			<?php masterchef_site_description(); ?>
		</div>

		<?php masterchef_main_menu(); ?>
	</div>

	<?php masterchef_social_list( 'header' ); ?>
</div>