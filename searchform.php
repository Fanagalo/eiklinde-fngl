<?php

/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fanagalo_underscores_core
 * 
 * Generate a unique ID for each form and 
 * a string containing an aria-label if one was passed to get_search_form() in the args array.
 * 
 * FNGL: slightly modified to meet theme requirements
 */

$unique_id = eiklinde_fngl_2021_unique_id( 'search-form-' );

$aria_label = ! empty( $args['label'] ) ? 'aria-label="' . esc_attr( $args['label'] ) . '"' : '';
?>
<form role="search" <?php echo $aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form-top" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $unique_id ); ?>">
		<span class="screen-reader-text"><?php _e( 'Search for:', 'eiklinde-fngl' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></span>
        <input type="search" 
            id="<?php echo esc_attr( $unique_id ); ?>" 
            class="search-field" 
            placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'eiklinde-fngl' ); ?>" 
            value="<?php echo get_search_query(); ?>" 
            name="s" />
    </label>
    <button type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'eiklinde-fngl' ); ?>"></button>
</form>

