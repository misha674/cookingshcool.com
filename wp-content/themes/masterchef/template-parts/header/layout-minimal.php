<?php
/**
 * Template part for minimal Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Masterchef
 */
?>

<div class="header-container__flex">
	<?php masterchef_social_list( 'header' ); ?>
	<div class="site-branding">
		<?php masterchef_header_logo() ?>
		<?php masterchef_site_description(); ?>
	</div>
	<?php masterchef_main_menu(); ?>
</div>
