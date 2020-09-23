<?php
/**
 * Template part for displaying blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package umctheme3
 */

?>
<!-- POST <?php the_ID(); ?> -->
<article id="post-<?php the_ID(); ?>" class="uu-card" data-aos="fade-up">
	<a href="<?php the_permalink(); ?>" class="uu-card-img" style="background-image:url('https://d26toa8f6ahusa.cloudfront.net/wp-content/uploads/2018/11/20131930/Student-Appreciation-Day-banner.png');"></a>
	<div class="uu-card-details">
		<div class="uu-card-body">
			<h3 class="uu-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php if (has_category()) : ?>
			<div class="uu-card-cats"><span>Categories:</span><?php the_category(); ?></div>
			<?php endif; ?>
			<p class="excerpt"><?php the_excerpt(); ?></p>
			<a href="<?php the_permalink(); ?>" class="uu-link">Read More</a>
		</div>
		<div class="uu-card-footer">
			<!-- A2A SOCIAL SHARING -->
			<div class="a2a_kit a2a_default_style uu-card-social" data-a2a-url="[Post URL]" data-a2a-title="[Post Title]">
				<a class="a2a_button_copy_link" target="_blank" href="/#copy_link" rel="nofollow noopener">
					<i class="fa fa-link" aria-hidden="true"></i>
				</a>
				<a class="a2a_button_facebook" target="_blank" href="/#facebook" rel="nofollow noopener">
					<i class="fab fa-facebook-f" aria-hidden="true"></i>
				</a>
				<a class="a2a_button_twitter" target="_blank" href="/#twitter" rel="nofollow noopener">
					<i class="fab fa-twitter" aria-hidden="true"></i>
				</a>
			<div style="clear: both;"></div></div>
			<!-- end A2A SOCIAL SHARING -->
			<div class="uu-card-date">
				<?php echo get_the_date(); ?>
			</div>
		</div>
	</div>
</article>
<!-- END POST <?php the_ID(); ?> -->
