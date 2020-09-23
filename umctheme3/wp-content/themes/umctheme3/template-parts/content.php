<?php
/**
 * Template part for displaying posts
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
<article id="post-<?php the_ID(); ?>" <?php if ($subnav_id) { post_class( 'subnav-active'); } else { post_class(); } ?>>
  <?php if ( ! is_front_page() ) : ?>
	<!-- ENTRY HEADER -->
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1><hr class="left">' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2><hr class="left">' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				umctheme3_posted_on();
				umctheme3_posted_by();
				?>
			</div>
		<?php endif; ?>
	</header>
	<!-- END ENTRY HEADER -->
  <?php endif; ?>
	<!-- ENTRY CONTENT -->
	<div class="entry-content">

		<?php umctheme3_post_thumbnail(); ?>

		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'umctheme3' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

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
	<!-- ENTRY FOOTER -->
	<footer class="entry-footer">
		<?php umctheme3_entry_footer(); ?>
	</footer>
	<!-- END ENTRY FOOTER -->
</article>
<!-- END POST <?php the_ID(); ?> -->
