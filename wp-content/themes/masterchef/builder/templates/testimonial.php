<?php
/**
 * Template part for Testimonial module displaying
 */
?>
<?php echo $this->_var( 'portrait_image' ); ?>
<div class="tm_pb_testimonial_description">
	<div class="tm_pb_testimonial_description_inner">
		<strong class="tm_pb_testimonial_author">
			<?php echo $this->_var( 'author' ); ?>
		</strong>
		<?php if( 'on' === $this->_var( 'quote_icon' ) ) {
			$data_icon = ( $this->_var( 'font_icon' ) !== $this->fields_defaults['font_icon'][0] ) ? esc_attr( tm_pb_process_font_icon( $this->_var( 'font_icon' ) ) ) : esc_attr( tm_pb_process_font_icon( $this->fields_defaults['font_icon'][0] ) );
			$icon_color = '' !== $this->_var( 'quote_icon_color' ) ? ' style="color:' . $this->_var( 'quote_icon_color' ) . ';"' : '';
			echo '<div class="tm_pb_testimonial_quote_icon"' . $icon_color . ' data-icon="' . $data_icon . '"></div>';
		} ?>
		<?php echo $this->shortcode_content; ?>
		<p class="tm_pb_testimonial_meta"><?php
			echo $this->_var( 'job_title' );
			if ( $this->_var( 'company_name' ) ) {
				printf( ', %s', $this->_var( 'company_name' ) );
			}
			if ( $this->_var( 'testi_date' ) ) {
				printf( ' - %s', $this->_var( 'testi_date' ) );
			}
		?></p>
	</div><!-- .tm_pb_testimonial_description_inner -->
</div><!-- .tm_pb_testimonial_description -->
