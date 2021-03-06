<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sixteen
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if ( get_header_image() ) : ?>
		<div id="header-image"></div>
	<?php endif; // End header image check. ?>
<div id="page" class="hfeed site">
    
    <div id="top-section">	
		<header id="masthead" class="site-header" role="banner">
			
			<div class="site-branding">
				<?php if ( get_theme_mod('sixteen_logo') != "" ) : ?>
						<div id="site-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('sixteen_logo'); ?>"></a>
						</div>
					<?php else : ?>	
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php endif; ?>
			</div>
			
			<?php get_template_part('icon', 'sociocon'); ?>
		
		</header><!-- #masthead -->
		
		<div id="nav-wrapper">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					
						<h1 class="menu-toggle"><?php _e( 'Menu', 'sixteen' ); ?></h1>
						<div class="screen-reader-text skip-link"><a href="#content"><?php _e( 'Skip to content', 'sixteen' ); ?></a></div>
			
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					
				</nav><!-- #site-navigation -->
		</div>	
		
		<?php
			get_template_part('slider', 'nivo');
		 ?>
		
		</div><!--#top-section-->
	
		<div id="content" class="site-content container">	