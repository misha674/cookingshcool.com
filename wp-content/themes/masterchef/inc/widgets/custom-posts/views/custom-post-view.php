<div class="custom-posts__item post <?php echo $grid_class; ?>">
	<div class="post-inner">
		<div class="entry-header">
			<div class="post-thumbnail">
				<?php echo $image; ?>
			</div>
			<?php echo $category; ?>
			<?php echo $title; ?>
			<div class="entry-meta">
				<?php echo $author; ?>
				<?php echo $date; ?>
				<?php echo $count; ?>
			</div>
		</div>
		<div class="entry-content">
			<?php echo $excerpt; ?>
		</div>
		<div class="entry-footer">
			<?php echo $button; ?>
		</div>
	</div>
</div>