<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package plidcos-theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <?php
      while ( have_posts() ) : the_post();

        the_content();

      endwhile; // End of the loop.
      ?>

			<?php

      $args = array(
        'orderby'   => 'name',
        'order'     => 'ASC',
        'hide_empty'    => '0',
        'name' => 'products'
      );
      $products_cat = get_categories($args);

      $args = array(
        'orderby'   => 'name',
        'order'     => 'DESC',
        'hide_empty'    => '0',
        'parent' => $products_cat[0]->cat_ID
      );
      $all_cats = get_categories($args);
      ?>

        <?php
          $left_count=0;
          $right_count=0;
          $left_col = " ";
          $right_col = " ";
          foreach ($all_cats as $category) {
            $cnt = 0;
            $prds = " ";
            $prds = $prds . '<h1 class="content-editable">' . $category->name . '</h1>';
            $prds = $prds . '<div class="content-editable"><p>';
            $args = array(
              // Arguments for your query.
              'category_name' => $category->slug
            );
            // Custom query.
            $query = new WP_Query( $args );
      			while ( $query->have_posts() ) : $query->the_post();
              global $post;
              $post_slug=$post->post_name;
              $prds = $prds. '<a href="' . $post_slug . '">' . get_the_title() . '</a>';
              $cnt = $cnt + 1;
      			endwhile; // End of the loop.
            $prds = $prds . '</p></div>';
            if ($right_count < $left_count) {
              $right_col = $right_col . $prds;
              $right_count = $right_count + $cnt;
            }
            else {
              $left_col = $left_col . $prds;
              $left_count = $left_count + $cnt;
            }
          }
        ?>

<!--
        <div class="mobile-nav-slider">
          <div>
              <a href="/">Home</a>
              <img src="http://plidco.com/modules/default/resources/images/red-button.png">
          </div>
              <div>
              <a href="/about-plidco">About</a>
              <img src="http://plidco.com/modules/default/resources/images/red-button.png">
          </div>
              <div>
              <a href="/product-line">Products</a>
              <img src="http://plidco.com/modules/default/resources/images/red-button.png">
          </div>
              <div>
              <a href="/videos">Videos</a>
              <img src="http://plidco.com/modules/default/resources/images/red-button.png">
          </div>
              <div>
              <a href="/distributor-locator">Find Distributor</a>
              <img src="http://plidco.com/modules/default/resources/images/red-button.png">
          </div>
              <div>
              <a href="/request-quote">Request Quote</a>
              <img src="http://plidco.com/modules/default/resources/images/red-button.png">
          </div>
              <div>
              <a href="/request-catalog">Catalog</a>
              <img src="http://plidco.com/modules/default/resources/images/red-button.png">
          </div>
              <div>
              <a href="/contact">Contact</a>
              <img src="http://plidco.com/modules/default/resources/images/red-button.png">
          </div>
      </div>
-->


        <div class="content inter-content">
            <div class="product-content">
                <div class="product-line-left">
                  <?php echo $left_col ?>
                </div>
                <div class="product-line-right">
                    <div class="product-wrapper">
                        <?php echo $right_col ?>
                    </div>
                </div>
            </div>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
