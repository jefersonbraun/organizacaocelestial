<?php get_header(); ?>

<div  class="row paddingT18 destaque">
    <div  class="fourcol">
        <h2>Destaque</h2><br />
        <img src="<?php echo get_template_directory_uri(); ?>/imagens/destaque/destaque.png" alt="destaque" width="380" height="360" />
        <p class="excerpt">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit neque. Suspendisse in orci.</p>
    </div>
    <div  class="fourcol">
        <h2>Clipes</h2><br />
        <img src="<?php echo get_template_directory_uri(); ?>/imagens/destaque/clipes.png" alt="clipes" width="380" height="360" />
        <p class="excerpt">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit neque. Suspendisse in orci.</p>
    </div>
    <div  class="fourcol last">
        <h2>Músicas</h2><br />
        <img src="<?php echo get_template_directory_uri(); ?>/imagens/destaque/musicas.png" alt="musicas" width="380" height="360" />
        <p class="excerpt">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit neque. Suspendisse in orci.</p>
    </div>
</div>

<div class="row paddingT18">
    <div class="threecol">
        <h2>Blog</h2> <br />
    </div>
    <div class="fivecol"></div>
    <div class="fourcol last direita pshows">
        <h2>Próximos Shows</h2>
        <span>Veja também a <a href="<?php echo home_url(); ?>/agenda">agenda completa</a></span>
    </div>
</div>
<div class="row">
    <div class="eightcol">
    
    <?php query_posts('showposts=2'); ?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <div class="miniPost">
            <?php the_post_thumbnail(); ?>
            <div class="miniTexto">
                <h3><?php the_title() ;?></h3>
                <p class="excerpt paddingT18"><?php the_excerpt(); ?></p>
            </div>
        </div>    
        <br style="clear: both;" />
        
        <?php endwhile; endif; ?>
    </div>
    
    <div id="proximosShows" class="fourcol last direita paddingT36">
        <div class="data">
        <div class="quando paddingT18">
            <span class="mes">JUN</span><br style="clear: both;"/>
            <span class="dia">27</span>
        </div>
            
        <div class="onde">
            <h4 class="local">Inncomum</h4><br style="clear: both;"/>
            <span class="titulo">Tributo a Bob Marley</span><br style="clear: both;"/>
            <span class="cidade">Novo Hamburgo</span>
        </div>
        </div>

        <br style="clear: both;">

        <div class="data">
            <div class="quando paddingT18">
                <span class="mes">JUN</span><br style="clear: both;"/>
                <span class="dia">28</span>
            </div>
                
            <div class="onde">
                <h4 class="local">Púbis</h4><br style="clear: both;"/>
                <span class="titulo">Mashups</span><br style="clear: both;"/>
                <span class="cidade">Novo Hamburgo</span>
            </div>
        </div>
        
        <br style="clear: both;">
        
        <div class="data">
            <div class="quando paddingT18">
                <span class="mes">JUN</span><br style="clear: both;"/>
                <span class="dia">28</span>
            </div>
                
            <div class="onde">
                <h4 class="local">Bar do Gago</h4><br style="clear: both;"/>
                <span class="titulo">Mashups</span><br style="clear: both;"/>
                <span class="cidade">Novo Hamburgo</span>
            </div>
        </div>

        
    </div>
</div>

<?php get_footer() ?>

















