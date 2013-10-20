<?php get_header(); ?>

<div  class="row paddingT18 destaque">
    <div  class="fourcol">
        <h2>Destaque</h2><br />
        <a href="http://organizacaocelestial.com.br/noia-skate-rap/">
        <img src="<?php echo get_template_directory_uri(); ?>/imagens/destaque/featuredNoiaSkateRap.png" alt="destaque" width="380" height="360" /></a>
        <p class="excerpt">Clipe de Nóia Skate Rap já passa de 20mil visualizações no Youtube!</p>
    </div>
    <div  class="fourcol">
        <h2>Clipes</h2><br />
        <a href="http://localhost/organizacaocelestial/clipes/"><img src="<?php echo get_template_directory_uri(); ?>/imagens/destaque/clipes.png" alt="clipes" width="380" height="360" /></a>
        <p class="excerpt">Conheça os clipes da Organização Celestial do Livre Arbítrio. Chega mais!</p>
    </div>
    <div  class="fourcol last">
        <h2>Músicas</h2><br />
        <a href="http://organizacaocelestial.com.br/musicas/"><img src="<?php echo get_template_directory_uri(); ?>/imagens/destaque/musicas.png" alt="musicas" width="380" height="360" /></a>
        <p class="excerpt">Já ouviu nossos sons? Então acessa aí e te diverte!</p>
    </div>
</div>

<div class="row paddingT18">
    <div class="threecol">
        <h2>Blog</h2> <br />
    </div>
    <div class="fivecol"></div>
    <div class="fourcol last direita pshows">
        <h2></h2>
        <span></span>
    </div>
</div>
<div class="row">
    <div class="twelvecol">
    
    <?php $wp_query->query('cat=-5'.'&showposts=2'); ?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <div class="miniPost">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <div class="miniTexto">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h3>
                <p class="excerpt paddingT18"><a href="<?php the_permalink(); ?>"><?php echo the_excerpt(); ?></a></p>
            </div>
        </div>    
        <br style="clear: both;" />
        
        <?php endwhile; endif; ?>
    </div>
        
    </div>
</div>

<?php get_footer() ?>

















