<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package umctheme3
 */

get_header();
?>
	<!-- CONTENT -->
	<div id="primary" class="content-area">
		
		<!-- MAIN -->
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
			<!-- PAGE HEADER -->
			<header class="page-header">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
				<hr class="left">
			</header>
			<!-- END PAGE HEADER -->

			<div class="uu-3col-container">
			<?php

				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content-archive', get_post_type() );

				endwhile;

				?>
			</div>
			<?php the_posts_pagination( array( 'mid_size'  => 2 ) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main>
		<!-- END MAIN -->
	</div>
	<!-- END CONTENT -->

<?php
// get_sidebar();
get_footer();
