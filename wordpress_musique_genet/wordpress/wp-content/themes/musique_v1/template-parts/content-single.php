<?php the_title( '<h1>', '</h1>' ); ?>
<?php the_author(); ?> has blogged <?php
the_author_posts(); ?> posts
<p>Other posts by <?php the_author_posts_link(); ?></p>
<p><?php the_date(); ?></p>
<p><?php the_category(); ?></p>
<?php the_content( ); ?>