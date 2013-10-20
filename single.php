<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<div class="row paddingT36">
			<div class="eightcol">
				<h2 class='entry-title'><?php the_title() ;?></h2>
				<br style="clear:both;" />
				<br style="clear:both;" />
				<div class="fb-like alignleft" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-show-faces="false" data-send="false"></div>
				<a href="https://twitter.com/share" class="twitter-share-button alignleft mleft10" data-url="<?php the_permalink(); ?>" data-text="" data-via="oclatil">Tweet</a>
				<br style="clear:both;" />
				<br style="clear:both;" />
				<?php the_content(); ?>
				<p class="alignleft">
					<span class="italico">Escrito por</span> <span class="dinpro"><?php the_author(); ?></span>
					<br style="clear:both;" />
					<?php
						if ( in_category('video') ) {
							
						} else {
							the_date('d/m/Y', '<span class="italico">em</span> <time class="dinpro">', '</time>');
						}
					?>
				</p>
				<br style="clear:both;" />
				<div class="fb-like alignleft" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-show-faces="false" data-send="false"></div>
            <a href="https://twitter.com/share" class="twitter-share-button alignleft mleft10" data-url="<?php the_permalink(); ?>" data-text="" data-via="oclatil">Tweet</a>
				<br style="clear:both;" />
				<br style="clear:both;" />				
				<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="470"></div>
			</div>
			
			<div class="fourcol last">
				<!-- vazio -->
			</div>
		</div>
	
	<?php endwhile; endif; ?>

<?php get_footer(); ?>