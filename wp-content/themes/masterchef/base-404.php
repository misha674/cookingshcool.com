<?php get_header( masterchef_template_base() ); ?>

	<?php do_action( 'masterchef_render_widget_area', 'full-width-header-area' ); ?>

	<?php masterchef_site_breadcrumbs(); ?>

	<div class="site-content_wrap">

		<?php do_action( 'masterchef_render_widget_area', 'before-content-area' ); ?>

			<div id="primary">

				<?php do_action( 'masterchef_render_widget_area', 'before-loop-area' ); ?>

				<main id="main" class="site-main" role="main">

					<?php include masterchef_template_path(); ?>

				</main><!-- #main -->

				<?php do_action( 'masterchef_render_widget_area', 'after-loop-area' ); ?>

			</div><!-- #primary -->

		<?php do_action( 'masterchef_render_widget_area', 'after-content-area' ); ?>

	</div><!-- .container -->

	<?php do_action( 'masterchef_render_widget_area', 'after-content-full-width-area' ); ?>

<?php get_footer( masterchef_template_base() ); ?>
