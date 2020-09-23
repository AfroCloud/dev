<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package umctheme3
 */

get_header();
?>
	<!-- CONTENT -->
	<div id="primary" class="content-area">
		<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
		<!-- MAIN -->
		<main id="main" class="site-main blog-main">

			<?php
				// SETUP QUERY
				if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
				elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
				else { $paged = 1; }

				$args = array(
					'post_type' 			=> array('post'),
					'post_status' 		=> array('publish'),
					'posts_per_page' 	=> 10,
					'paged'          	=> $paged,
					'orderby' 				=> 'date',
					'order' 					=> 'DESC',
					'ignore_sticky_posts' => true,
				);
				$query = new WP_Query( $args );

				if ( $query->have_posts() ) :
			?>
				<div class="uu-3col-container aos-container">
			<?php
					// LOOP
					while ( $query->have_posts() ) :
						$query->the_post();
						get_template_part( 'template-parts/content', 'blog' );

					endwhile;
					// END LOOP
			?>
				</div>
				<?php the_posts_pagination( array( 'mid_size'  => 2 ) ); ?>
			<?php else : ?>

			<?php
				endif;
				wp_reset_postdata();
			?>


		</main>
		<!-- END MAIN -->
	</div>
	<!-- END CONTENT -->

<?php
// get_sidebar();
get_footer();
