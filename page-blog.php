<?php
/*Template name: Index*/

get_header(); ?>

<?php query_posts('showposts=4'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2><?php the_title() ;?></h2>
	<?php the_post_thumbnail(); ?>
	<?php the_excerpt(); ?>

<?php endwhile; else: ?>

	<p>Sorry, no posts to list</p>

<?php endif; ?>

<?php get_footer(); ?>