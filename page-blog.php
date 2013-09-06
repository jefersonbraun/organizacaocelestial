<?php
/*Template name: Index*/

get_header(); ?>

<div class="row paddingT36">
    <div class="eightcol">
    
    <?php query_posts('showposts=5'); ?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <div class="loopPost">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h2>
            <?php the_date('d/m/Y', '<time class="postTime">', '</time>'); ?>
            <br style="clear:both;" />
			<br style="clear:both;" />
            <?php the_content( __( 'Leia mais <span class="meta-nav">&rarr;</span>' ) ); ?>
            <br style="clear:both;" />
			<br style="clear:both;" />
            <p class="alignleft">
            	Escrito por <?php the_author(); ?><br />
				 <?php comments_number( 'Nenhum comentário até o momento', '1 comentário', '% comentários' ); ?>
            </p>
            <div class="fb-like alignright" data-href="<?php the_permalink(); ?>" data-width="450" data-show-faces="true" data-send="true"></div>
        </div>
        
        <?php endwhile; endif; ?>
    </div>
    
    <div class="fourcol last">
        <?php get_template_part( 'sidebar', 'social'); ?>
    </div>

<?php get_footer(); ?>