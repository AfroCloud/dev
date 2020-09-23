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

			<!-- STATIC MARQUEE -->
			<div class="uu-static-marquee" style="background-image:url('https://3po.umc.utah.edu/wp-content/uploads/sites/47/2020/07/utah-homepage-bg1.jpg');">
				<div class="uu-marquee-callout">
					<h1>WELCOME UTES</h1>
					<hr>
					<h2>FALL REGISTRATION IS NOW OPEN!<span>We’re excited to welcome you back to campus.</span></h2>
					<div class="uu-marquee-btns">
						<a href="#" class="btn ghost white">Register Now</a>
						<a href="#" class="btn ghost white">Apply to the U</a>
					</div>
					<p>
						For information about applying to the University of Utah,<br>visit <a href="https://admissions.utah.edu/" target="_blank">admissions.utah.edu</a>
					</p>
				</div>
			</div>
			<!-- END STATIC MARQUEE -->

      <!-- NEWS & EVENTS SECTION -->
				<section class="uu-section news-events-section">
          <div class="section-title center">
            <h2>
							Campus News &amp; Events
							<span>The latest news from @theU and more</span>
						</h2>
            <hr>
          </div>

          <div class="uu-3col-container aos-container">
            <!-- CARD -->
            <div class="uu-card" data-aos="fade-up">
              <div class="uu-card-img" style="background-image:url('https://d26toa8f6ahusa.cloudfront.net/wp-content/uploads/2020/06/26143318/Block-U-for-attheu.jpg');"></div>
              <div class="uu-card-details">
                <div class="uu-card-body">
                  <h3 class="uu-card-title">Our goal of an anti-racist campus</h3>
                  <a href="#" class="uu-card-cat">@ THE U</a>
                  <p class="excerpt">We want to highlight concrete actions we are taking to achieve our goal of an anti-racist 21st century campus grounded in equity and inclusion</p>
                  <a href="#" class="uu-link">Read More</a>
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
                    JUNE 26, 2020
                  </div>
                </div>
              </div>
            </div>
            <!-- END CARD -->

						<!-- CARD -->
            <div class="uu-card" data-aos="fade-up">
              <div class="uu-card-img" style="background-image:url('https://d26toa8f6ahusa.cloudfront.net/wp-content/uploads/2020/06/26150706/Spring-View-Campus-6.jpg');"></div>
              <div class="uu-card-details">
                <div class="uu-card-body">
                  <h3 class="uu-card-title">Integrating Safety</h3>
                  <a href="#" class="uu-card-cat">@ THE U</a>
                  <p class="excerpt">The Department of Public Safety is transforming and changing to better serve the U community.</p>
                  <a href="#" class="uu-link">Read More</a>
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
                    June 26, 2020
                  </div>
                </div>
              </div>
            </div>
            <!-- END CARD -->

						<!-- CARD -->
            <div class="uu-card" data-aos="fade-up">
              <div class="uu-card-img" style="background-image:url('https://d26toa8f6ahusa.cloudfront.net/wp-content/uploads/2020/04/24120653/aerial-campus-shot-16x9-1.jpg');"></div>
              <div class="uu-card-details">
                <div class="uu-card-body">
                  <h3 class="uu-card-title">Opening doors to the nation’s top universities</h3>
                  <a href="#" class="uu-card-cat">@ THE U</a>
                  <p class="excerpt">U marketing is working to change perceptions.</p>
                  <a href="#" class="uu-link">Read More</a>
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
                   JUNE 25, 2020
                  </div>
                </div>
              </div>
            </div>
            <!-- END CARD -->

						<!-- CARD -->
            <div class="uu-card" data-aos="fade-up">
              <div class="uu-card-img" style="background-image:url('https://d26toa8f6ahusa.cloudfront.net/wp-content/uploads/2020/06/15112027/yes-website-banner-16x9-1.png');"></div>
              <div class="uu-card-details">
                <div class="uu-card-body">
                  <h3 class="uu-card-title">Keeping kids learning during a summer of COVID-19</h3>
                  <a href="#" class="uu-card-cat">@ THE U</a>
                  <p class="excerpt">Continuing Education and Community Engagement at the University of Utah</p>
                  <a href="#" class="uu-link">Read More</a>
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
                    JUNE 24, 2020
                  </div>
                </div>
              </div>
            </div>
            <!-- END CARD -->
          </div>

        </section>
				<!-- END NEWS & EVENTS SECTION -->


        <!-- PROGRAM SEARCH CONTAINER -->
        <section class="uu-program-search-container" style="background-image:url('https://3po.umc.utah.edu/wp-content/uploads/sites/47/2020/06/terrain-bkg.svg');">
          <!-- PROGRAM SEARCH HEADER -->
          <div class="uu-program-seach-header">
            <h2>Start Your Journey</h2>
            <p>Explore more than 100 majors, programs & areas of emphasis</p>
          </div>
          <!-- END PROGRAM SEARCH HEADER -->
          <!-- PROGRAM SEARCH FORM -->
          <div class="uu-program-search-form">
            <div class="uu-program-search-descprition">
              <p>Select an area of interest to see suggested majors and programs available to you at the University of Utah.</p>
            </div>
            <form class="" method="post" action="#">
            <div class="uu-program-select-wrapper">
              <select id="uuProgramInterestDropdown">
              <option>Select an Interest</option>
              <option>Arts &amp; Performance</option>
              <option>Building &amp; Design</option>
              <option>Computers &amp; Technology</option>
              <option>Economic &amp; Political Systems</option>
              <option>Energy &amp; Environment</option>
              <option>History &amp; Literature</option>
              <option>Human Cultures &amp; Behavior</option>
              <option>Interdisciplinary Programs</option>
              <option>Languages</option>
              <option>Management &amp; Entrepreneurship</option>
              <option>Math &amp; Sciences</option>
              <option>Medicine &amp; Health</option>
              <option>Public Service &amp; Education</option>
              </select>
            </div>
            </form>
          </div>
          <!-- END PROGRAM SEARCH FORM -->
          <!-- PROGRAM SEARCH RESULTS -->
          <article class="uu-program-search-results-wrapper">
            <ul id="uuReturnedResultsList">

            </ul>
          </article>
          <!-- END PROGRAM SEARCH RESULTS -->
        </section>
        <!-- END PROGRAM SEARCH CONTAINER -->



        <!-- GET TO KNOW THE U SECTION -->
        <section class="uu-section">
          <div class="section-title center">
            <h2>
          		Get to Know the U
          		<span>Quick facts about the University of Utah</span>
          	</h2>
            <hr>
          </div>
        	<div class="aos-container" style="text-align:center; margin: 0px auto;">
        		<img src="https://3po.umc.utah.edu/wp-content/uploads/sites/47/2020/06/Screen-Shot-2020-06-25-at-12.39.26-PM.png" style="margin:30px auto;" data-aos="fade-up">
        	</div>
        </section>
        <!-- END GET TO KNOW THE U SECTION -->

        <!-- SOCIAL SECTION -->
        <section class="uu-section">
          <div class="section-title center">
            <h2>
          		Social & Media
          		<span>See what’s being discussed & shared around the U</span>
          	</h2>
            <hr>
          </div>
        	<div style="text-align:center; margin: 0px auto;">
        		<div class="social-tabs-container">
              <div class="social-tab-buttons">
                <button type="button" name="instagram" class="social-tab-button active" data-target="social-tab-instagram"><i class="fab fa-instagram" aria-hidden="true"></i></button>
                <button type="button" name="twitter" class="social-tab-button" data-target="social-tab-twitter"><i class="fab fa-twitter" aria-hidden="true"></i></button>
                <button type="button" name="facebook" class="social-tab-button" data-target="social-tab-facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></button>
                <button type="button" name="youtube" class="social-tab-button" data-target="social-tab-youtube"><i class="fab fa-youtube" aria-hidden="true"></i></button>
              </div>
              <div class="social-tabs aos-container">
                <div class="social-tab" id="social-tab-instagram" data-aos="fade-up">
      						<iframe src="https://www.juicer.io/api/feeds/uofu-instagram-homepage/iframe?per=12" frameborder="0"></iframe>
                </div>
                <div class="social-tab hidden" id="social-tab-twitter" data-aos="fade-up">
      						<iframe src="https://www.juicer.io/api/feeds/uutah-a6418f99-9a8d-43be-8201-5403cca0f2e1/iframe?per=12" frameborder="0"></iframe>
                </div>
                <div class="social-tab hidden" id="social-tab-facebook" data-aos="fade-up">
      						<iframe src="https://www.juicer.io/api/feeds/uofu-facebook-homepage/iframe?per=12" frameborder="0"></iframe>
                </div>
                <div class="social-tab hidden" id="social-tab-youtube" data-aos="fade-up">
      						<iframe src="https://www.juicer.io/api/feeds/uofu-youtube-homepage/iframe?per=12" frameborder="0"></iframe>
                </div>
              </div>
            </div>
        	</div>
        </section>
        <!-- END SOCIAL SECTION -->

	</div>
	<!-- END CONTENT -->

<?php
// get_sidebar();
get_footer();
