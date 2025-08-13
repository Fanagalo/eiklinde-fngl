<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
		get_template_part( 'template-parts/content', get_post_type() );

	endwhile; // End of the loop.
	?>

</main>
<div class="main-right"></div>

<?php
get_sidebar();
get_footer();
