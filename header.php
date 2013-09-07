<!DOCTYPE html>

<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="screen" /><![endif]-->

	<!-- The 1140px Grid - http://cssgrid.net/ -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/1140.css" type="text/css" media="screen">
	
	<!-- Your styles -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" type="text/css" media="screen">
	
	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/css3-mediaqueries.js"></script>
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/clipes.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

	<!-- FACEBOK -->	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=526893990697251";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<!-- TWITTER -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	<!-- GOOGLE -->
	<script>
	(function() {
	var cx = '003101551587083949207:dl_4useau1k';
	var gcse = document.createElement('script');
	gcse.type = 'text/javascript';
	gcse.async = true;
	gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
	'//www.google.com/cse/cse.js?cx=' + cx;
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(gcse, s);
	})();
	</script>
	
	<?php wp_head(); ?>
</head>

<body>
		<header class="paddingT36">
            <div class="container">
                <div class="row">
                    <div id="logo" class="threecol">
            			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            				<img src="<?php echo get_template_directory_uri(); ?>/imagens/logo.png" alt="logo" width="166" height="36">
            			</a>
                    </div>
                    <div class="ninecol last">
            			<div id="redes">
            				<a class="youtube" target="_blank" href="http://www.youtube.com/user/OCLATV/videos"></a>
            				<a class="twitter" target="_blank" href="https://www.twitter.com/oclatil"></a>
            				<a class="facebook" target="_blank" href="https://www.facebook.com/organizacaocelestial"></a>
            			</div>
                    </div>
                </div>
                
                <div class="row paddingT36">
                    <div class="eightcol">
            			<nav id="menuPrincipal">
            			    <?php wp_nav_menu( "__array ('menu' +> 'principal')"); ?>
            			</nav><!-- #site-navigation -->
                    </div>
                    <div class="fourcol last">
					<a href="https://twitter.com/share" class="twitter-share-button alignright mleft10" data-url="http://organizacaocelestial.com.br/" data-text="" data-via="oclatil">Tweet</a>
						<div class="fb-like alignright" data-href="http://organizacaocelestial.com.br/" data-layout="button_count" data-show-faces="false" data-send="false"></div>
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
		</header>

		<div class="container">
