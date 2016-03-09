<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png?v=vMkKmqO57x">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png?v=vMkKmqO57x">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png?v=vMkKmqO57x">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png?v=vMkKmqO57x">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png?v=vMkKmqO57x">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png?v=vMkKmqO57x">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png?v=vMkKmqO57x">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png?v=vMkKmqO57x">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png?v=vMkKmqO57x">
	<link rel="icon" type="image/png" href="/favicon-32x32.png?v=vMkKmqO57x" sizes="32x32">
	<link rel="icon" type="image/png" href="/android-chrome-192x192.png?v=vMkKmqO57x" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-96x96.png?v=vMkKmqO57x" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicon-16x16.png?v=vMkKmqO57x" sizes="16x16">
	<link rel="manifest" href="/manifest.json?v=vMkKmqO57x">
	<link rel="shortcut icon" href="/favicon.ico?v=vMkKmqO57x">
	<meta name="apple-mobile-web-app-title" content="Mike Gajda">
	<meta name="application-name" content="Mike Gajda">
	<meta name="msapplication-TileColor" content="#15bb85">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png?v=vMkKmqO57x">
	<meta name="theme-color" content="#ffffff">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<div class="top_bar">
		    <div class="logo_container">
		      <img src="http://keeponsteering.com.s3.amazonaws.com/kos-black-low-res.png" style="height:50px;width:50px;">
		      <a class="logo_link" href="http://mikegajda.com">MG</a>
		    </div>
		   <div class="li_container not_phone">
		     <li class="header_nav_list"><a href="/"><i class="fa fa-fw fa-newspaper-o"></i>Blog</a></li>
		     <li class="header_nav_list"><a href="/projects/"><i class="fa fa-fw fa-tachometer"></i>Projects</a></li>
		     <li class="header_nav_list"><a href="http://keeponsteering.com"><i class="fa fa-fw fa-user"></i>About</a></li>
		     <li class="header_nav_list"><a href="/resume/"><i class="fa fa-fw fa-suitcase"></i>Resume</a></li>
		     <li class="header_nav_list" id="last"><a href="/contact/"><i class="fa fa-fw fa-send"></i>Contact</a></li>
		   </div>
		   <div class="li_container phone">
		     <li class="header_nav_list" id="first"><a href="/"><i class="fa fa-fw fa-newspaper-o"></i><div>Blog</div></a></li>
		     <li class="header_nav_list"><a href="/projects/"><i class="fa fa-fw fa-tachometer"></i><div>Projects</div></a></li>
		     <li class="header_nav_list"><a href="http://keeponsteering.com"><i class="fa fa-fw fa-user"></i><div>About</div></a></li>
		     <li class="header_nav_list"><a href="/resume/"><i class="fa fa-fw fa-suitcase"></i><div>Resume</div></a></li>
		     <li class="header_nav_list" id="last"><a href="/contact/"><i class="fa fa-fw fa-send"></i><div>Contact</div></a></li>
		   </div>
		</div>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="site-branding">
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>
			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
