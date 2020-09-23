<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package umctheme3
 */

 // VARS
 $subnav_id = rwmb_meta( 'umctheme3_subnav_select' );
 $subnav_name = rwmb_the_value( 'umctheme3_subnav_select', array(),'', false );
?>
<!-- POST <?php the_ID(); ?> -->
<article id="post <?php the_ID(); ?>" <?php if ($subnav_id) { post_class( 'subnav-active'); } else { post_class(); } ?>>
  <?php if ( ! is_front_page() ) : ?>
	<!-- ENTRY HEADER -->
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<hr class="left">
	</header>
	<!-- END ENTRY HEADER -->
  <?php endif; ?>
	<!-- ENTRY CONTENT -->
	<div class="entry-content">

		<?php umctheme3_post_thumbnail(); ?>

		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'umctheme3' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
	<!-- END ENTRY CONTENT -->
	<?php if ($subnav_id) : ?>
		<!-- SUB NAV -->
		<div class="uu-subnav-container">
		<?php
			echo '<div class="subnav-header"><h4>'.$subnav_name.'</h4></div>';
			wp_nav_menu( array(
				'menu'							=> $subnav_id,
				'menu_class'        => 'subnav',
				'container'         => false,
				'depth'							=> 1,
				'items_wrap'        => '<ul class="%2$s" rel="top">%3$s</ul>'
			));
		?>
		</div>
		<!-- END SUB NAV -->
	<?php endif; ?>

</article>
<!-- END POST <?php the_ID(); ?> -->
