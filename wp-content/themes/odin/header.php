<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="no-js ie ie7 lt-ie9 lt-ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="no-js ie ie8 lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div class="container">
		<header id="header" role="banner">
			<?php if ( is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			<?php else : ?>
				<div class="site-title h1"><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<div class="site-description h2"><?php bloginfo( 'description' ); ?></div>
			<?php endif ?>

			<?php
				$header_image = get_header_image();
				if ( ! empty( $header_image ) ) :
			?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" height="<?php esc_attr_e( $header_image->height ); ?>" width="<?php esc_attr_e( $header_image->width ); ?>" alt="" /></a>
			<?php endif; ?>
	</div>
	<?php if( is_home() ){ ?>
	<div class="top-menu">
		<div class="container">
			<div class="col-xs-1 col-md-1 hidden-sm hidden-xs"></div>
			<div class="col-xs-4 col-md-4 container-logo hidden-sm hidden-xs">
				<div class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-xs-12 visible-xs-* visible-sm-* menu-topo">
				<nav id="main-navigation" class="navbar navbar-default" role="navigation">
					<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'odin' ); ?>"><?php _e( 'Skip to content', 'odin' ); ?></a>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
						<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php /*

						<a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

						*/ ?>
					</div>

					<div class="collapse navbar-collapse navbar-main-navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'depth'          => 2,
									'container'      => false,
									'menu_class'     => 'nav navbar-nav',
									'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
									'walker'         => new Odin_Bootstrap_Nav_Walker()
								)
							);
						?>
					</div><!-- .navbar-collapse -->
				</nav><!-- #main-menu -->
			</div>
		</div>
	</div>
	<?php }else{ ?>
	<div class="top-menu">
		<div class="container">
			<div class="col-xs-1 col-md-1 hidden-sm hidden-xs"></div>
			<div class="col-xs-2 col-md-2 hidden-sm hidden-xs container-logo2">
				<div class="logo2">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
				</div>
			</div>
			<div class="col-xs-9 col-md-9 visible-sm-* menu-topo">
				<nav id="main-navigation" class="navbar navbar-default" role="navigation">
					<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'odin' ); ?>"><?php _e( 'Skip to content', 'odin' ); ?></a>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
						<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php /*

						<a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

						*/ ?>
					</div>

					<div class="collapse navbar-collapse navbar-main-navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'depth'          => 2,
									'container'      => false,
									'menu_class'     => 'nav navbar-nav',
									'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
									'walker'         => new Odin_Bootstrap_Nav_Walker()
								)
							);
						?>
					</div><!-- .navbar-collapse -->
				</nav><!-- #main-menu -->
			</div>
		</div>
	</div>
	<?php } ?>
		</header><!-- #header -->
		
