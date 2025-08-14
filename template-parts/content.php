<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fanagalo_underscores_core
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="article-header">
		<?php

		if(has_post_thumbnail()) {
			echo '<div class="post-thumbnail alignwide">';
				the_post_thumbnail($post_id, 'full');
			echo '</div>';
		}


		the_category('');

		if ( is_singular() ) :
			the_title( '<h1 class="article-title">', '</h1>' );
		else :
			the_title( '<h2 class="article-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		the_date( '', '<div class="article-post-date">', '</div>' );

		?>
	</header><!-- .article-header -->


	<div class="article-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'eiklinde-fngl' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

	/*
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eiklinde-fngl' ),
			'after'  => '</div>',
		) );
	*/

		?>
	</div><!-- .article-content -->

	<footer class="article-footer">
		<div class="article-tags"><?php the_tags('Lees meer over ',''); ?></div><!-- .article-tags -->
	</footer><!-- .article-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
