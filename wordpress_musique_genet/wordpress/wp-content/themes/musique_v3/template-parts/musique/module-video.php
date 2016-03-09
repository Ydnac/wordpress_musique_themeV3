<?php
	global $redux_musique;
	$feature_video_id =  $redux_musique['opt-featured-video'];
	$video = get_post( $feature_video_id );
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><?php _e( "Featured Video" ); ?></h3>
	</div>
	<div class="panel-body">
		<div class="thumbnail video">
			<?php echo get_the_post_thumbnail($video->ID, 'preview', array('class'=>'img-responsive')); ?>
			<div class="caption text-center">
				<a href="<?php the_permalink($video->ID); ?>"> <i
					class="fa fa-youtube-play fa-3x"></i><span><?php echo $video->post_title; ?></span></a>
			</div>
		</div>
	</div>
</div>