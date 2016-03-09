<?php the_title( '<h1>', '</h1>' ); ?>
<?php the_author(); ?> has blogged <?php the_author_posts(); ?>
posts
<p>Other posts by <?php the_author_posts_link(); ?></p>
<?php the_content( ); ?>