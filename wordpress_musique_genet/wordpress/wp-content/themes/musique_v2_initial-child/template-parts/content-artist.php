<div class="thumbnail artist"><?php echo get_the_post_thumbnail( $_post->ID, 'normal' ); ?>

<div class="caption">
		<a style="color:
<?php the_field ( 'couleur_daffichage' );?>" href="<?php the_field ( 'facebook' );?>">
			<i class="fa fa-facebook-official fa-3x"></i>
		</a> <a style="color:<?php the_field ( 'couleur_daffichage' );?>"href="<?phpthe_field ( 'twitter' );?>">
			<i class="fa fa-twitter fa-3x"></i>
		</a>
	</div>

</div>

<div class="panel panel-default">
	<div class="panel-heading"><?php the_title( "<h3 class=''>", "</h3>" ); ?></div>
	<div class="panel-body"><?php the_taxonomies();?>
<?php the_content( ); ?></div>
</div>



<style>
.thumbnail.artist {
	position: relative;
}

.thumbnail.artist .caption {
	position: absolute;
	bottom: 0;
	right: 0;
}
</style>