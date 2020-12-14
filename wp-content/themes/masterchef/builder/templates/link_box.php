<?php
/**
 * Template part for Blurb module displaying
 */
?>
<?php if ( $this->_var( 'title_orientation' ) === 'top' ) : ?>
	<div class="tm_pb_link_box_title-block">
		<?php echo $this->_var( 'title' );?>
		<?php if( '' !== $this->_var( 'button') ) : ?>
			<div class="tm_pb_link_box_button_holder"><?php echo $this->_var( 'button' ); ?></div>
		<?php endif; ?>	
	</div>
<?php endif; ?>
<div class="tm_pb_link_box_content" style="background-image:url(<?php echo $this->_var( 'image' ); ?>);">
	<div class="tm_pb_blurb_content"><?php
		echo $this->shortcode_content;
	?></div>
</div>
<?php if ( $this->_var( 'title_orientation' ) === 'bottom' ) : ?>
	<div class="tm_pb_link_box_title-block">
		<?php echo $this->_var( 'title' );?>
		<?php if( '' !== $this->_var( 'button') ) : ?>
			<div class="tm_pb_link_box_button_holder"><?php echo $this->_var( 'button' ); ?></div>
		<?php endif; ?>	
	</div>
<?php endif; ?>
