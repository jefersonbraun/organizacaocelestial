<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<div class="row paddingT36">
			<div class="eightcol">
				<h2 class="entry-title"><?php the_title() ;?></h2>
				<?php the_date('d/m/Y', '<time class="postTime">', '</time>'); ?>
				<br style="clear:both;" />
				<br style="clear:both;" />
				<?php the_content(); ?>
				<br style="clear:both;" />
				<br style="clear:both;" />
				<p class="alignleft">
				Escrito por <?php the_author(); ?><br />
				</p>
				<a href="https://twitter.com/share" class="twitter-share-button alignright mleft10" data-url="<?php the_permalink(); ?>" data-text="" data-via="oclatil">Tweet</a>
				<div class="fb-like alignright" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-show-faces="false" data-send="false"></div>
				<br style="clear:both;" />
				<br style="clear:both;" />				
				<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="470"></div>
			</div>
			
			<div class="fourcol last">
			<?php get_template_part( 'sidebar', 'social'); ?>
			</div>
		</div>
	
	<?php endwhile; endif; ?>

<?php get_footer(); ?>