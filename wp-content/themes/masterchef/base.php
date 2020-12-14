<?php get_header( masterchef_template_base() ); ?>

	<?php do_action( 'masterchef_render_widget_area', 'full-width-header-area' ); ?>

	<?php masterchef_site_breadcrumbs(); ?>

	<div <?php echo masterchef_get_container_classes( array( 'site-content_wrap' ), 'content' ); ?>>

		<?php do_action( 'masterchef_render_widget_area', 'before-content-area' ); ?>

		<div class="row">

			<div id="primary" <?php masterchef_primary_content_class(); ?>>

				<?php do_action( 'masterchef_render_widget_area', 'before-loop-area' ); ?>

				<main id="main" class="site-main" role="main">

					<?php include masterchef_template_path(); ?>

				</main><!-- #main -->

				<?php do_action( 'masterchef_render_widget_area', 'after-loop-area' ); ?>

			</div><!-- #primary -->

			<?php get_sidebar( 'secondary' ); // Loads the sidebar-secondary.php template. ?>

			<?php get_sidebar( 'primary' ); // Loads the sidebar.php template.  ?>

		</div><!-- .row -->

		<?php do_action( 'masterchef_render_widget_area', 'after-content-area' ); ?>

	</div><!-- .container -->

	<?php do_action( 'masterchef_render_widget_area', 'after-content-full-width-area' ); ?>

<?php get_footer( masterchef_template_base() ); ?>
