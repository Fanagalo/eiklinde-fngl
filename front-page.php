<?php
/**
 * The template for displaying the front-page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fanagalo_underscores_core
 */

get_header();
?>

<div class="main-left"></div>
<main id="main primary" class="main-area">

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'front-page' );

	endwhile; // End of the loop.
	?>

</main>
<div class="main-right"></div>

<?php
get_sidebar();
get_footer();
