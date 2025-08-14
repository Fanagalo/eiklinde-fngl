<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fanagalo_underscores_core
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php include_once("inc/analyticstracking.php") ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'eiklinde-fngl' ); ?></a>

	<div class="header-full-bg"></div>

	<header id="masthead" class="header-area">

		<div class="header-logo">
			<?php
			$logo = "<img src=" . get_theme_file_uri() . "/assets/images/eik-en-linde-logo-kleur-met-wit.svg>"; 

			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $logo; ?></a></h1>
				<?php
			else :
				?>
				<p class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $logo; ?></a></p>
				<?php
			endif;
			?>
		</div><!-- .header-logo -->

		<div class="nav-area-secondary">
			<nav id="top-navigation" class="secondary-navigation" role="navigation" aria-label="<?php _e( 'Secondary Menu', 'eiklinde-fngl' ); ?>">
				<?php wp_nav_menu( 
					array( 
						'theme_location' => 'secondary',
						'container'      => '',
						'items_wrap' 	 => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
						) 
					)
				; ?>
			</nav>

			<?php get_search_form() // this will be overridden by searchform.php ?>

		</div><!-- .nav-area-secondary -->

		<div class="nav-area">

			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Main Menu', 'eiklinde-fngl' ); ?>">
				<?php wp_nav_menu( 
					array( 
						'theme_location' => 'primary',
						'container'      => '',
						'items_wrap' 	 => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
						) 
					)
				; ?>
			</nav>
		</div><!-- nav-area -->

	</header><!-- .header-area -->		