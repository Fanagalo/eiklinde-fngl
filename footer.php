<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fanagalo_underscores_core
 */
?>

	<div class="footer-full-bg"></div>
	<footer id="colophon" class="footer-area">

		<div class="footer-rights-acknowledgements">
			<p>	Copyright <?php echo date("Y"); ?> | Fanagalo | Barokensemble Eik en Linde<br/>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'eiklinde-fngl' ), 'eiklinde-fngl', '<a href="https://fanagalo.nl">Jaap Wiering</a>' );
				?>
			</p>
		</div><!-- .footer-rights-acknowledgements -->

		<div id="fanagalo-me-fecit">
			Design and development by <a href="https://fanagalo.nl" target="_blank">Fanagalo</a>
		</div>

	</footer>

<?php wp_footer(); ?>

</body>
</html>