<?php
/*Template name: Blog*/

get_header(); ?>

<div class="row paddingT36">
    <div class="eightcol">
    
    <?php $wp_query->query('cat=-5'.'&paged='.$paged); ?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <div class="loopPost">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h2>
            
            <br style="clear:both;" />
			<br style="clear:both;" />
            <?php the_content( __( 'Leia mais <span class="meta-nav">&rarr;</span>' ) ); ?>
            <br style="clear:both;" />
			<br style="clear:both;" />
            <p class="alignleft">
            	<span class="italico">Escrito por</span> <span class="dinpro"><?php the_author(); ?></span>
            	<br style="clear:both;" />
            	<?php the_date('d/m/Y', '<span class="italico">em</span> <time class="dinpro">', '</time>'); ?>
            </p>
            <div class="fb-like alignleft" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-show-faces="false" data-send="false"></div>
            <a href="https://twitter.com/share" class="twitter-share-button alignleft mleft10" data-url="<?php the_permalink(); ?>" data-text="" data-via="oclatil">Tweet</a>
        </div>
        
        <?php endwhile; endif; ?>
        
        <?php if(function_exists('wp_paginate')) {
		    wp_paginate();
		} ?>
    </div>
    
    <div class="fourcol last">
        <!-- VAZIO -->
    </div>

<?php get_footer(); ?>