<?php
	$artist_id = get_the_ID();
	global $redux_musique;
	$nbvideos = $redux_musique["opt-artist-videos-number"];
	$order = $redux_musique["opt-artist-videos-orderby"];
	$args=array(
			'post_type' =>'video',
			'orderby' => $order,
			'posts_per_page' => $nbvideos,
			'meta_query' => array(
					array(
							'key' => '_musique_video_artist_video',
							'value' => $artist_id,
					)
			)		
	);
	$videos = get_posts( $args );
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><?php _e( "Latest Videos" ); ?></h3>
	</div>
	<div class="panel-body">
		<ul class="list-group">
		<?php foreach($videos as $video) : ?>
			<li class="list-group-item">
			<div class="thumbnail video">
			<?php echo get_the_post_thumbnail($video->ID, 'thumbnail', array('class'=>'img-responsive')); ?>
			<div class="caption text-center">
					<a href="<?php the_permalink($video->ID); ?>"> <i
						class="fa fa-youtube-play fa-3x"></i><span><?php echo $video->post_title; ?></span></a>
				</div>
			</div>
			</li>
		<?php endforeach; ?>
  		</ul>	
	</div>
</div>