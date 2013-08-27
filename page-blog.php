<?php
/*Template name: Index*/

get_header(); ?>

<div class="row paddingT36">
    <div class="eightcol">
    
    <?php query_posts('showposts=5'); ?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <div class="loopPost">
            <h2 style="margin-bottom: 18px;"><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h2>
            <?php the_date('d/m/Y', '<time>', '</time>'); ?>
            <?php the_content(); ?>
        </div>
        
        <?php endwhile; endif; ?>
    </div>
    
    <div class="fourcol last">
        <?php get_template_part( 'sidebar', 'social'); ?>
    </div>

<?php get_footer(); ?>