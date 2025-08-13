<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fanagalo_underscores_core
 */

get_header();
?>

<div class="main-left"></div>
<main id="main primary" class="main-area">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title">Berichten</h1>
		</header><!-- .page-header -->

		<div class="archive-overview">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					* 
					* get_template_part( 'template-parts/content', get_post_type() );
					*
				*/

				get_template_part( 'template-parts/content', 'archive' );


			endwhile;
			?>

			</div><!-- .archive-overview -->

		<?php 
		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</main>
<div class="main-right"></div>

<?php
get_sidebar();
get_footer();
