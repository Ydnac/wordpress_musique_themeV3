<div class="thumbnail video">
	<?php if(has_post_thumbnail($post->ID)) : ?>
		<?php the_post_thumbnail('cover'); ?>
	<?php else:?>
		<?php echo '<img src="' . get_bloginfo( 'stylesheet_directory' ). '/images/photo_no_available.png" />'; ?>
	<?php endif;?>
	
	<div class="caption text-center">
		<a href="<?php the_permalink(); ?>"> <i class="fa fa-youtube-play fa-3x"></i><span><?php the_title( '', '' ); ?></span></a>
	</div>
</div>
