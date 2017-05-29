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
        <a href="/"><img src="http://plidco.com/modules/default/resources/images/logo.png"></a>

        <h1>Pipeline Repair & Maintenance Fittings</h1>

    </div>


    <a href="tel://1-440-871-5700"><img class="phone" src="http://plidco.com/modules/default/resources/images/phone.png"></a>

    <div class="menu-wrapper">
        <img src="http://plidco.com/modules/default/resources/images/menu_icon.png" class="menu-icon">
        <nav class="main-nav">
                                <a href="/">Home</a>

                                <a href="/about-plidco">About</a>

                                <a href="/product-line">Products</a>

                                <a href="/videos">Videos</a>

                                <a href="/distributor-locator">Find Distributor</a>

                                <a href="/request-quote">Request Quote</a>

                                <a href="/request-catalog">Catalog</a>

                                <a href="/contact">Contact</a>

                        </nav>
    </div>

    <nav class="sub-nav">
        <div class="logo-wrapper">
            <a href="http://www.youtube.com/user/PipelineRepair" target="_blank">
                <img src="http://plidco.com/modules/default/resources/images/youtube-logo.jpg"></a>
            <a href="http://www.facebook.com/pages/PLIDCO-The-Pipe-Line-Development-Company/132720888658" target="_blank">
                <img src="http://plidco.com/modules/default/resources/images/facebook-logo.jpg"></a>
            <a href="http://www.linkedin.com/in/plidco" target="_blank">
                <img src="http://plidco.com/modules/default/resources/images/linkedin-logo.jpg"></a>
            <a href="http://www.pipelinerepairandsafety.com/" target="_blank"><img src="http://plidco.com/modules/default/resources/images/blog-logo.png"></a>
        </div>
    </nav>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
