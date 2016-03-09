<div class="panel panel-default">
	<div class="panel-heading">
<?php the_title( "<h3 class=''>", "</h3>" ); ?>
</div>
	<div class="panel-body">
		<div class="row">
		<div class="col-md-2">
	<?php if (has_post_thumbnail ( $post->ID )) : ?>
		<?php the_post_thumbnail('thumbnail', array( 'class' => 'img-circle' ) ); ?>
	<?php endif; ?></div>
    <div class="col-md-10"><?php the_content( ); ?></div>
   		</div>
	</div>
</div>
