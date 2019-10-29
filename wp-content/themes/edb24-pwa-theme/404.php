<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
        <style>       
            <?php 
            include(dirname(__FILE__).'/assets/css/404.css');
            ?>
        </style>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="error-404 not-found">
				<div class="page-content">
                    <p>
                        We’re sorry, but the page you are looking for isn’t here. To see what plans are available in your area, please click on the county that you
                         live in from the list below. If you are looking for other information, please 
                         choose from the navigation above.
                    </p>
                    <!-- wp:heading {"align":"center"} -->
                    <h2 style="text-align:center">Michigan Residents</h2>
                    <!-- /wp:heading -->

                    <!-- wp:columns {"className":"counties_list"} -->
                    <div class="wp-block-columns has-2-columns counties_list"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:list -->
                    <ul><li><a href="/find-a-plan/advantage-advantageplus/">Clinton County</a></li><li><a href="/find-a-plan/advantage-advantageplus/">Eaton County</a></li><li><a href="/find-a-plan/advantage-advantageplus/">Gratiot County</a></li><li><a href="/find-a-plan/advantage-advantageplus/">Ingham County</a></li></ul>
                    <!-- /wp:list --></div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:list -->
                    <ul><li><a href="/find-a-plan/advantage-advantageplus/">Ionia County</a></li><li><a href="/find-a-plan/advantage-advantageplus/">Montcalm County</a></li><li><a href="/find-a-plan/advantage-advantageplus/">Shiawassee County</a></li></ul>
                    <!-- /wp:list --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->
				</div><!-- .page-content -->
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
