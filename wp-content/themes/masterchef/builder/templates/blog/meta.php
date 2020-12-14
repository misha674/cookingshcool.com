<?php
/**
 * Template part for displaying post meta in Blog module
 */
if ( ! $this->is_meta_visible() ) {
	return;
}
?>
<div class="tm_pb_post_meta"><?php

	if ( 'on' === $this->_var( 'show_date' ) ) {
		echo tm_get_safe_localization(
			sprintf(
				esc_html__( '%s', 'masterchef' ),
				'<span class="published">' . esc_html( get_the_date( $this->_var( 'meta_date' ) ) ) . '</span>'
			)
		);
	}

	if ( 'on' === $this->_var( 'show_author' ) ) {
		echo tm_get_safe_localization(
			sprintf(
				'<span>' .  esc_html__( ' by %s', 'masterchef' ) . '</span>',
				'<span class="author vcard">' .  tm_pb_get_the_author_posts_link() . '</span>'
			)
		);
	}

	if ( 'on' === $this->_var( 'show_comments' ) ) {
		echo '<span class="comments">';
		printf(
			esc_html(
				_nx( '1 Comment', '%s Comments', get_comments_number(), 'number of comments', 'masterchef' )
			),
			number_format_i18n( get_comments_number() )
		);
		echo '</span>';
	}

	if ( 'on' === $this->_var( 'show_categories' ) ) {
		echo get_the_category_list();
	}

?></div>