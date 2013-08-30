<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<div class="row paddingT36">
			<div class="eightcol">
				<h2 style="margin-bottom: 18px;"><?php the_title() ;?></h2>
				<?php the_date('d/m/Y', '<time>', '</time>'); ?>
				<?php the_content(); ?>
			</div>
		
			<div class="fourcol last">
			<?php get_template_part( 'sidebar', 'social'); ?>
			</div>
		</div>
	
	<?php endwhile; endif; ?>

<?php get_footer(); ?>