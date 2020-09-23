<?php
/**
 * The template for displaying the Front Pge
 *
 * This is the template that displays the Front Page.
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


    <!-- MARQUEE V3 -->
    <div class="uu-marquee">
      <div class="marquee-quick-links">
        <div class="marquee-quick-link-lg">
          <span class="marquee-quick-link-date">OCTOBER 7 - KINGSBURY HALL</span>
          <h2>VP DEBATE 2020</h2>
          <p>
            “Civic engagement is a core value of our nation and, as we host the 2020 Vice Presidential debate, Utah students will be able to learn about the political process and experience firsthand how being involved matters.”<br>
            <span>—Ruth V. Watkins, President of the University of Utah</span>
          </p>
          <a href="#" class="btn white ghost">Learn more</a> <a href="#" class="btn white ghost">Register to Vote</a>
        </div>
        <div class="marquee-quick-links-sm">
          <div class="marquee-quick-link-sm">
            <a href="#">
              PROSPECTIVE<br>STUDENTS
            </a>
          </div>
          <div class="marquee-quick-link-sm">
            <a href="#">
              REQUEST<br>INFORMATION
            </a>
          </div>
          <div class="marquee-quick-link-sm">
            <a href="#">
              VIRTUAL<br>VISITS
            </a>
          </div>
        </div>
      </div>
      <video id="bgvid" autoplay="" loop="" muted="" style="opacity: 1;"><source src="https://cdnapisec.kaltura.com/p/670542/sp/0/playManifest/entryId/0_0gv3h0ci/format/url/protocol/https/flavorId/0_zisasi4c/video.mp4" type="video/mp4"></video>
    </div>
    <!-- END MARQUEE V3 -->


    <?php
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
    ?>


  </div>
  <!-- END CONTENT -->
<?php
// get_sidebar();
get_footer();
