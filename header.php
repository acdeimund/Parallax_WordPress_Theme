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

<!-- Start header -->
	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation navbar navbar-expand-md sticky-top navbar-dark bg-custom">

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
			<!-- Hamberger Button -->
			<button id="primary-navigation-button"class="navbar-toggler"
							type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</button>
			<!-- Main Navigation -->

			<?php
					wp_nav_menu( array(
						'theme_location' 	=> 'menu-1',
						'container_class' => 'collapse navbar-collapse',
						'container_id' 	 	=> 'navbarSupportedContent',
						'menu_id'        	=> 'primary-menu',
						'menu_class' 		 	=> 'navbar-nav ml-auto',
						'walker'					=> new Walker_Bootstrap_Nav_Header
					) );
			?>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<!-- Ends the Header -->
	<!-- Starts Main Content -->

	<div id="content" class="site-content">
