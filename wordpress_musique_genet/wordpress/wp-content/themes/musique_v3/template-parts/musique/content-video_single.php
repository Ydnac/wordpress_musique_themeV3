<?php $url = esc_url(get_post_meta( get_the_ID(), '_musique_video_video',1)); ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<header>
			<h4 class="text-uppercase"><?php the_title(); ?></h4>
		</header>
	</div>
	<div class="panel-body">
		<div class="embed-responsive embed-responsive-16by9">
			<?php echo wp_oembed_get( $url );?>
		</div>
	</div>			
</div>
