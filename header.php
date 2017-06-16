<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plidcos-theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'plidcos-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
    <div class="logo-tagline">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>

        <h1>Pipeline Repair & Maintenance Fittings</h1>

    </div>


    <a href="tel://1-440-871-5700"><img class="phone" src="<?php echo get_template_directory_uri(); ?>/images/phone.png"></a>

    <div class="menu-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/images/menu_icon.png" class="menu-icon">
        <nav class="main-nav">
					<?php wp_nav_menu( array( 'menu' => 'Main' ) ); ?>
<!--
                                <a href="/">Home</a>

                                <a href="/about-plidco">About</a>

                                <a href="/product-line">Products</a>

                                <a href="/videos">Videos</a>

                                <a href="/distributor-locator">Find Distributor</a>

                                <a href="/request-quote">Request Quote</a>

                                <a href="/request-catalog">Catalog</a>

                                <a href="/contact">Contact</a>
-->
                        </nav>
    </div>

    <nav class="sub-nav">
        <div class="logo-wrapper">
            <a href="http://www.youtube.com/user/PipelineRepair" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/youtube-logo.jpg"></a>
            <a href="http://www.facebook.com/pages/PLIDCO-The-Pipe-Line-Development-Company/132720888658" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-logo.jpg"></a>
            <a href="http://www.linkedin.com/in/plidco" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-logo.jpg"></a>
            <a href="http://www.pipelinerepairandsafety.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-logo.png"></a>
        </div>
    </nav>


	</header><!-- #masthead -->

	<?php

/* Mobile menu pojde cez shortcode
	wp_nav_menu( array(
		'menu' => 'Main', 'container_class' => 'mobile-nav-slider', 'items_wrap' => '%3$s',
	    'walker' => new WPDocs_Walker_Nav_Menu()
	) );

	/**
	 * Custom walker class.
	 */
	class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu {
	    /**
	     * Start the element output.
	     *
	     * Adds main/sub-classes to the list items and links.
	     *
	     * @param string $output Passed by reference. Used to append additional content.
	     * @param object $item   Menu item data object.
	     * @param int    $depth  Depth of menu item. Used for padding.
	     * @param array  $args   An array of arguments. @see wp_nav_menu()
	     * @param int    $id     Current item ID.
	     */
	    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	        global $wp_query;

	        $output .= '<div><a href="'.$item->url.'">'.$item->title.'</a><img src="'.get_template_directory_uri().'/images/red-button.png"></div>';
	    }

			function end_el( &$output, $item, $depth = 0, $args = array() ) {
				$output .= '';
			}
	}
	?>

	<div id="content" class="site-content">
