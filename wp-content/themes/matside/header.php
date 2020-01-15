<!doctype html>
<html lang="en" class="has-pattern">
	<head>
		<?php wp_head(); ?>

		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="">
		<meta name="keywords" content="Wrestling Statistics, Statbook, Stat Keeper">
        <meta name="HandheldFriendly" content="true">
        <meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=0.9, user-scalable=no, target-densitydpi=device-dpi">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PC3G78L6KS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-PC3G78L6KS');
		</script>
	</head>
	<body <?php body_class(); ?>>
		 <?php  $url = home_url(); ?>
		<div id="root">
			<header id="top">
				<h1>
					 <a  href="<?php echo $url; ?>">
           <?php  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                  if ( has_custom_logo() ) {
                          echo '<img width="100px" alt="Logo" class="header-logo" src="'. esc_url( $logo[0] ) .'">';
                  } else {
                          echo  get_bloginfo( 'name' );
                  } ?>
           </a>
				</h1>
				<nav id="skip">
					<ul>
						<li><a href="#nav" accesskey="n">Skip to navigation (n)</a></li>
						<li><a href="#content" accesskey="c">Skip to content (c)</a></li>
						<li><a href="#footer" accesskey="f">Skip to footer (f)</a></li>
					</ul>
				</nav>
				<nav id="nav">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=> false ) ); ?>
					
				</nav>
			</header> 
