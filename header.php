<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Parallax
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'parallax' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			if ( has_custom_logo() ) :
				the_custom_logo();
			else :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			endif;
				?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation navbar navbar-expand-sm navbar-toggleable-md navbar-dark bg-faded">
			<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class' 		 => 'navbar-nav ml-auto mt-2 mt-lg-0',
						'container_class' => 'collapse navbar-collapse menu-primary-container',
						'container_id' 	 => 'nav-content'
					) );
			?>
		</nav><!-- #site-navigation -->
		
		




	
	<!-- Links --> 


	</header><!-- #masthead -->

	<div id="content" class="site-content">
