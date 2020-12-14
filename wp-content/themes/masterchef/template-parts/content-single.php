<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Masterchef
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php $utility = masterchef_utility()->utility; ?>

	<figure class="post-thumbnail">
		<?php $utility->media->get_image( array(
				'size'        => 'masterchef-thumb-l',
				'html'        => '<img class="post-thumbnail__img wp-post-image" src="%3$s" alt="%4$s">',
				'placeholder' => false,
				'echo'        => true,
			) );
		?>

		<?php $cats_visible = masterchef_is_meta_visible( 'single_post_categories', 'single' ) ? 'true' : 'false'; ?>

		<?php $utility->meta_data->get_terms( array(
				'visible' => $cats_visible,
				'type'    => 'category',
				'icon'    => '',
				'before'  => '<div class="post__cats">',
				'after'   => '</div>',
				'echo'    => true,
			) );
		?>
	</figure><!-- .post-thumbnail -->

	<header class="entry-header">
			<?php
				$utility->attributes->get_title( array(
					'class' => 'entry-title',
					'html'  => '<h4 %1$s><a href="%2$s" rel="bookmark">%4$s</a></h4>',
					'echo'  => true,
				) );
			?>
		</header><!-- .entry-header -->

	<header class="entry-header">

	<?php if ( 'post' === get_post_type() ) : ?>

		<div class="entry-meta">
			<span class="post__date">
				<?php $date_visible = masterchef_is_meta_visible( 'blog_post_publish_date', 'single' ) ? 'true' : 'false';

					$utility->meta_data->get_date( array(
						'visible' => $date_visible,
						'class'   => 'post__date-link',
						'echo'    => true,
					) );
				?>
			</span>

			<?php $author_visible = masterchef_is_meta_visible( 'blog_post_author', 'single' ) ? 'true' : 'false'; ?>

			<?php $utility->meta_data->get_author( array(
					'visible' => $author_visible,
					'class'   => 'posted-by__author',
					'prefix'  => esc_html__( 'by ', 'masterchef' ),
					'html'    => '<span class="posted-by">%1$s<a href="%2$s" %3$s %4$s rel="author">%5$s%6$s</a></span>',
					'echo'    => true,
				) );
			?>

			<span class="post__comments">
				<?php $comment_visible = masterchef_is_meta_visible( 'blog_post_comments', 'single' ) ? 'true' : 'false';

					$utility->meta_data->get_comment_count( array(
						'visible' => $comment_visible,
						'class'   => 'post__comments-link',
						'sufix'  => _n_noop( 'comment (%1$s)', 'comments (%1$s)', 'masterchef' ),
						'echo'    => true,
					) );
				?>
			</span>
		</div><!-- .entry-meta -->

	<?php endif; ?>

	<?php masterchef_ads_post_before_content() ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links__title">' . esc_html__( 'Pages:', 'masterchef' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span class="page-links__item">',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'masterchef' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php masterchef_share_buttons( 'single' ); ?>

		<?php $tags_visible = masterchef_is_meta_visible( 'single_post_tags', 'single' ) ? 'true' : 'false'; ?>

		<?php $utility->meta_data->get_terms( array(
				'visible'   => $tags_visible,
				'type'      => 'post_tag',
				'delimiter' => ', ',
				'before'    => '<div class="post__tags"><span class="post__tags-label">' . esc_html__( 'Tags:', 'masterchef' ) . '</span>',
				'after'     => '</div>',
				'echo'      => true,
			) );
		?>
	</footer><!-- .entry-footer -->

	<?php the_post_navigation( array(
		'next_text' => '<div class="meta-nav" aria-hidden="true">' . esc_html__( 'Next Post', 'masterchef' ) . '</div> ' . '<div class="post-title">%title</div>',
		'prev_text' => '<div class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous Post', 'masterchef' ) . '</div> ' . '<div class="post-title">%title</div>'
	) ); ?>

</article><!-- #post-## -->