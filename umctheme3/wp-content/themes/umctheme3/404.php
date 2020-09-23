<?php
/**
 * The template for displaying 404 pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package umctheme3
 */

get_header();
?>
	<!-- CONTENT -->
	<div id="primary" class="content-area error-404">

		<!-- MAIN -->
		<main id="main" class="site-main">

			<div class="error-404-container">
				<span>Error code: 404</span>
				<h1>OOPS!</h1>
				<p>We can't seem to find the page you're looking for.</p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="btn">Get me outta here!</a>
			</div>


		</main>
		<!-- END MAIN -->
	</div>
	<!-- END CONTENT -->

<?php
// get_sidebar();
get_footer();
