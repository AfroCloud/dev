<?php
/**
 * The main template file for UMCTHEME3
 *
 * @package umctheme3
 */

get_header();
?>

<!-- CONTENT -->
<main id="content" class="site-content uu-content">
	<?php
	if ( have_posts() ) :

		if ( is_home() && is_front_page() ) :
			?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
			<?php
		endif;


		while ( have_posts() ) :
			the_post();

			/*
			 * Include the Post-Type-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', get_post_type() );

		endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>
</main>
<!-- END CONTENT -->
<?php
// get_sidebar();
get_footer();