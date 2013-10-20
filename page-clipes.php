<?php
/*Template name: Videos*/

get_header(); ?>

<div class="row paddingT36">
    <div class="eightcol">
	    
    <?php query_posts( array ( 'category_name' => 'video' ) ); ?>
    
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <div class="loopVideo">
            <h2 class="entry-title-video"><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h2>
            <br style="clear:both;" />
			<br style="clear:both;" />
            <?php the_content( __( 'Leia mais <span class="meta-nav">&rarr;</span>' ) ); ?>
            <br style="clear:both;" />
			<br style="clear:both;" />
<a href="https://twitter.com/share" class="twitter-share-button alignright mleft10" data-url="<?php the_permalink(); ?>" data-text="" data-via="oclatil">Tweet</a>
            <div class="fb-like alignright" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-show-faces="false" data-send="false"></div>
        </div>
        
        <?php endwhile; endif; ?>
        <?php if(function_exists('wp_paginate')) {
		    wp_paginate();
		} ?>
    </div>
    
    <div class="fourcol last">
        <?php get_template_part( 'sidebar', 'social'); ?>
    </div>

<?php get_footer(); ?>