<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Parallax
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
		<?php
		$parallax_description = get_bloginfo( 'description', 'display' );
		if ( $parallax_description || is_customize_preview() ) :
		?>
			<p class="site-description"><?php echo $parallax_description; /* WPCS: xss ok. */ ?></p>
		<?php endif; ?>
	
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'front-page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();