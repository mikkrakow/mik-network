<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
  <head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
  <meta name="description" content="Informacje o działalności, programy, wolontariat, inspirowanie aktywnych form udziału w kulturze, nowości, biblioteka sztuki, kultura Małopolski" />
  <meta name="ROBOTS" content="NOODP">
  <title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php bloginfo('url'); ?>/xmlrpc.php?rsd" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <!--[if IE]>
    <link href="<?php bloginfo('template_directory'); ?>/ie.css" type="text/css" rel="stylesheet" media="screen" />
  <![endif]-->
  
  <!--[if lte IE 6]>
    <link href="<?php bloginfo('template_directory'); ?>/ie6.css" type="text/css" rel="stylesheet" media="screen" />
  <![endif]-->

  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
  <script type="text/javascript">
  //<![CDATA[

	jQuery(function(){

	if( jQuery('#side_nav').length > 0)
	{
		//jQuery('#side_nav ul.menu li').children('ul').hide();
		
		jQuery('#side_nav ul.menu>li').not('#site-menu ul li').hover(
		
			//mouse enter
			function(){
				jQuery(this).children('ul').stop(true,true).slideDown();
			},
			
			//mouse leave
			function(){
				jQuery(this).children('ul').stop(true,true).hide();
			}
		);
		
		jQuery('#side_nav ul.sub-menu>li').not('#site-menu ul li').hover(
		
			//mouse enter
			function(){
				jQuery(this).children('ul').stop(true,true).slideDown('fast');
			},
			
			//mouse leave
			function(){
				jQuery(this).children('ul').stop(true,true).hide();
			}
		);
	}
	if( jQuery('#side_nav2').length > 0)
	{
		//jQuery('#side_nav ul.menu li').children('ul').hide();
		
		jQuery('#side_nav2 ul.menu>li').hover(
		
			//mouse enter
			function(){
				jQuery(this).children('ul').stop(true,true).slideDown('fast');
			},
			
			//mouse leave
			function(){
				jQuery(this).children('ul').stop(true,true).hide();
			}
		);
	}
	if( jQuery('#site-menu').length > 0)
	{
		
		//jQuery('#side_nav ul.menu li').children('ul').hide();
		jQuery('#site-menu ul.menu>li').hover(
		
			//mouse enter
			function(){
				jQuery(this).children('ul').stop(true,true).slideDown('fast');
			},
			
			//mouse leave
			function(){
				jQuery(this).children('ul').stop(true,true).hide();
			}
		);
		
	}

});
  
  //]]>
  </script>
  
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26173958-1']);
  _gaq.push(['_setDomainName', 'mik.krakow.pl']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  
</head>

<body <?php body_class(); ?>>

<div id="wrapper">
  <div id="main-menu">
	<div id="main-menu-content">
		 <a style="float:left" href="<?php bloginfo('url'); ?>"><span class="header_image" style="margin:-5px -2px -5px 0;"></span></a>
		  <?php wp_nav_menu( array( 'theme_location' => 'main-menu' )); ?> 
		<div id="lang">
		<a href="http://english.mik.krakow.pl/">EN</a>
	 	</div>  
		  <div id="search"><?php get_search_form(); ?></div>
	 </div>
</div>








