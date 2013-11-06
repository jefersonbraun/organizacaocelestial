<!DOCTYPE html xmlns:fb="http://ogp.me/ns/fb#">

<head>
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=526893990697251";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<header class="paddingT36">
            <div class="container">
                <div class="row overVisible">
					<div id="logo" class="eightcol">
						<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/imagens/logo.png" alt="logo" width="166" height="36">
						</a>
						<br />
						<nav id="menuPrincipal" class="paddingT36">
							<?php wp_nav_menu( "__array ('menu' +> 'principal')"); ?>
						</nav><!-- #site-navigation -->
					</div>
					<div class="fourcol last">
						<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Forganizacaocelestial&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80&amp;appId=526893990697251" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:100px;" allowTransparency="true"></iframe>
					</div>
                </div><!-- .row -->
            </div><!-- .container -->
		</header>

		<div class="container">
		<br />
