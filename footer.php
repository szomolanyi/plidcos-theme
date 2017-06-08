<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plidcos-theme
 */

?>

	</div><!-- #content -->

	<footer>

			<nav class="foot-nav table1">
					<table>

							<tr>
									<td><a href="http://www.youtube.com/user/PipelineRepair" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-large.jpg"></a></td>
									<td><a href="http://www.facebook.com/pages/PLIDCO-The-Pipe-Line-Development-Company/132720888658" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-large.jpg"></a></td>
							</tr>

							<tr>
									<td><a href="http://www.linkedin.com/profile/view?id=12914254&authType=name&authToken=67Lq&trk=tyah" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-large.jpg"></a></td>
									<td><a href="http://www.pipelinerepairandsafety.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-large.png"></a></td>
							</tr>


					</table>
			</nav>

			<nav class="foot-nav">
					<?php wp_nav_menu( array( 'menu' => 'Footer1', 'container' => '' ) ); ?>
<!--
					<a href="/product-line">Products</a>
					<a href="/contact">Contact</a>
					<a href="/distributor-locator">Find Distributor Locator</a>
					<a href="/about-plidco">About</a>
					<a href="/custom-services">Custom Services</a>
-->
			</nav>

			<nav class="foot-nav">
					<?php wp_nav_menu( array( 'menu' => 'Footer2', 'container' => '' ) ); ?>
<!--
					<a href="/request-quote">Request Quote</a>
					<a href="/request-catalog">Catalog</a>
					<a href="/datasheets">Data Sheets</a>
					<a href="/employment">Employment</a>
				<a href="/slideshow">Slide Show</a>
-->

			</nav>

			<nav class="foot-nav icon-wrapper">
					<div class="footer-img-wrapper">
							<table class="table2">

									<tr>
											<td><a href="http://www.youtube.com/user/PipelineRepair" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/images/youtube-large.jpg"></a>
											</td>
											<td><a href="http://www.facebook.com/pages/PLIDCO-The-Pipe-Line-Development-Company/132720888658" target="_blank"> <img
																	src="<?php echo get_template_directory_uri(); ?>/images/facebook-large.jpg"></a></td>
									</tr>

									<tr>
											<td><a href="http://www.linkedin.com/profile/view?id=12914254&authType=name&authToken=67Lq&trk=tyah" target="_blank"> <img
																	src="<?php echo get_template_directory_uri(); ?>/images/linkedin-large.jpg"></a></td>
											<td><a href="http://www.pipelinerepairandsafety.com/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/images/blog-large.png"></a>
											</td>
									</tr>


							</table>

							<a href="/modules/default/resources/pdfs/iso-certificates.pdf"><img src="<?php echo get_template_directory_uri(); ?>/images/iso-logo.jpg"></a>
					</div>
			</nav>

	</footer>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
