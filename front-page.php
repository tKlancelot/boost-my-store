<?php
/**
 * The template for displaying all pages
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommerce-basic
 */

get_header();
?>

	<main id="primary" class="site-main">
        <?php
		while ( have_posts() ) :
			the_post();

		endwhile; // End of the loop.

		?>
		

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
