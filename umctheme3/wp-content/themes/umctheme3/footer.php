<?php
/**
 * The footer for UMCTHEME3
 *
 * @package umctheme3
 */

?>
		<!-- FOOTER -->
		<footer id="footer">
			<!-- TOP FOOTER -->
			<div id="top_footer" class="uu-top-footer">
				<div class="uu-top-footer-container">
					<?php if ( has_nav_menu( 'footer_menu1' ) ) : ?>
					<!-- FOOTER MENU 1 -->
					<div class="uu-footer-menu1 uu-footer-menu">
						<?php
				      $menu4_location = 'footer_menu1';
				      $theme_locations = get_nav_menu_locations();
				      $menu4_obj = get_term( $theme_locations[$menu4_location], 'nav_menu' );
				      $menu4_name = $menu4_obj->name;

							if ( has_nav_menu( $menu4_location ) ) :
			          echo '<h3>'.esc_html($menu4_name).'</h3><hr>';
			          wp_nav_menu( array(
			            'theme_location'    => $menu4_location,
			            'menu_class'        => 'footer-menu',
			            'container'         => false,
			            'before'            => '<h3>',
			            'after'             => '</h3>',
			            'items_wrap'        => '<ul id="%1$s" class="%2$s" rel="top">%3$s</ul>'
			          ));
							endif;
				    ?>
					</div>
					<!-- END FOOTER MENU 1 -->
					<?php endif; ?>
					<?php if ( has_nav_menu( 'footer_menu3' ) ) : ?>
					<!-- FOOTER MENU 3 -->
					<div class="uu-footer-menu3 uu-footer-menu">
						<?php
				      $menu6_location = 'footer_menu3';
				      $theme_locations = get_nav_menu_locations();
				      $menu6_obj = get_term( $theme_locations[$menu6_location], 'nav_menu' );
				      $menu6_name = $menu6_obj->name;

							if ( has_nav_menu( $menu6_location ) ) :
			          echo '<h3>'.esc_html($menu6_name).'</h3><hr>';
			          wp_nav_menu( array(
			            'theme_location'    => $menu6_location,
			            'menu_class'        => 'footer-menu',
			            'container'         => false,
			            'before'            => '<h3>',
			            'after'             => '</h3>',
			            'items_wrap'        => '<ul id="%1$s" class="%2$s" rel="top">%3$s</ul>'
			          ));
							endif;
				    ?>
					</div>
					<!-- END FOOTER MENU 3 -->
					<?php endif; ?>
					<!-- FOOTER DEPARTMENT -->
					<div class="uu-footer-dept">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="uu-footer-dept-logo">
			        <?php if ( get_theme_mod( 'dept-logo' ) ) : ?>
			          <img src="<?php echo get_theme_mod( 'dept-logo' ); ?>" alt="" title="">
			        <?php else : ?>
			          <img src="<?php echo get_template_directory_uri() . '/img/blocku.svg' ?>" alt="University of Utah Block U Logo" title="University of Utah">
			        <?php endif; ?>
			      </a>
		        <h5 class="uu-footer-dept-name">
							<?php echo get_bloginfo( 'name' ); ?>
						</h5>
		        <p class="uu-footer-dept-address">
							<?php if ( get_theme_mod( 'dept-address1' ) ) : ?>
								<?php echo get_theme_mod( 'dept-address1' ); ?>
							<?php else : ?>
		          201 PRESIDENTS CIRCLE
						<?php endif; ?><br>
						<?php if ( get_theme_mod( 'dept-address2' ) ) : ?>
							<?php echo get_theme_mod( 'dept-address2' ); ?>
						<?php else : ?>
						SALT LAKE CITY, UT 84112
					<?php endif; ?>
		        </p>
						<p class="uu-footer-dept-phone">
							<?php if ( get_theme_mod( 'dept-phone' ) ) : ?>
								<?php echo get_theme_mod( 'dept-phone' ); ?>
							<?php else : ?>
		          801-581-7200
							<?php endif; ?>
						</p>
					</div>
					<!-- END FOOTER DEPARTMENT -->
					<?php if ( has_nav_menu( 'footer_menu2' ) ) : ?>
					<!-- FOOTER MENU 2 -->
					<div class="uu-footer-menu2 uu-footer-menu">
						<?php
				      $menu5_location = 'footer_menu2';
				      $theme_locations = get_nav_menu_locations();
				      $menu5_obj = get_term( $theme_locations[$menu5_location], 'nav_menu' );
				      $menu5_name = $menu5_obj->name;

							if ( has_nav_menu( $menu5_location ) ) :
			          echo '<h3>'.esc_html($menu5_name).'</h3><hr>';
			          wp_nav_menu( array(
			            'theme_location'    => $menu5_location,
			            'menu_class'        => 'footer-menu',
			            'container'         => false,
			            'before'            => '<h3>',
			            'after'             => '</h3>',
			            'items_wrap'        => '<ul id="%1$s" class="%2$s" rel="top">%3$s</ul>'
			          ));
							endif;
				    ?>
					</div>
					<!-- END FOOTER MENU 2 -->
					<?php endif; ?>
					<?php if ( has_nav_menu( 'footer_menu4' ) ) : ?>
					<!-- FOOTER MENU 4 -->
					<div class="uu-footer-menu4 uu-footer-menu">
						<?php
				      $menu7_location = 'footer_menu4';
				      $theme_locations = get_nav_menu_locations();
				      $menu7_location_obj = get_term( $theme_locations[$menu7_location], 'nav_menu' );
				      $menu7_name = $menu7_obj->name;

							if ( has_nav_menu( $menu7_location ) ) :
			          echo '<h3>'.esc_html($menu7_name).'</h3><hr>';
			          wp_nav_menu( array(
			            'theme_location'    => $menu7_location,
			            'menu_class'        => 'footer-menu',
			            'container'         => false,
			            'before'            => '<h3>',
			            'after'             => '</h3>',
			            'items_wrap'        => '<ul id="%1$s" class="%2$s" rel="top">%3$s</ul>'
			          ));
							endif;
				    ?>
					</div>
					<!-- END FOOTER MENU 4 -->
					<?php endif; ?>
				</div>
			</div>
			<!-- END TOP FOOTER -->
			<!-- BOTTOM FOOTER -->
			<div id="bottom_footer" class="uu-bottom-footer">
				<div class="uu-bottom-footer-container">
					<!-- FOOTER GLOBAL LOGO -->
					<div class="uu-footer-logo">
						<a href="https://utah.edu/" target="_blank"></a>
					</div>
					<!-- END FOOTER GLOBAL LOGO -->
					<!-- FOOTER GLOBAL LINKS -->
					<div class="uu-footer-links">
						<p>© <?php echo date('Y'); ?> THE UNIVERSITY OF UTAH</p>
						<ul>
							<li>
								<a href="https://utah.edu/nondiscrimination/" target="_blank">Nondiscrimination &amp; Accessibility</a>
							</li>
							<li>
								<a href="https://utah.edu/disclaimer/" target="_blank">Disclaimer</a>
							</li>
							<li>
								<a href="https://utah.edu/privacy/" target="_blank">Privacy</a>
							</li>
							<li>
								<a href="https://unews.utah.edu/primary-media-contacts/" target="_blank">Media Contacts</a>
							</li>
						</ul>
					</div>
					<!-- END FOOTER GLOBAL LINKS -->
					<!-- FOOTER SOCIAL -->
					<div class="uu-footer-social">
						<ul>
							<?php if ( get_theme_mod( 'twitter' ) ) : ?>
								<li><a href="<?php echo get_theme_mod( 'twitter' ); ?>" target="_blank"><i class="fab fa-twitter" title="Follow us on Twitter"></i></a></li>
								<?php else: ?>
									<li>
								    <a href="https://twitter.com/uutah" target="_blank">
								      <i class="fab fa-twitter"></i>
								    </a>
								  </li>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'facebook' ) ) : ?>
								<li><a href="<?php echo get_theme_mod( 'facebook' ); ?>" target="_blank"><i class="fab fa-facebook" title="Follow us on Facebook"></i></a></li>
								<?php else: ?>
									<li>
								    <a href="https://www.facebook.com/universityofutah" target="_blank">
								      <i class="fab fa-facebook-f"></i>
								    </a>
								  </li>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'instagram' ) ) : ?>
								<li><a href="<?php echo get_theme_mod( 'instagram' ); ?>" target="_blank"><i class="fab fa-instagram" title="Follow us on Instagram"></i></a></li>
								<?php else: ?>
									<li>
								    <a href="https://www.instagram.com/universityofutah/" target="_blank">
								      <i class="fab fa-instagram"></i>
								    </a>
								  </li>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'youtube' ) ) : ?>
								<li><a href="<?php echo get_theme_mod( 'youtube' ); ?>" target="_blank"><i class="fab fa-youtube" title="Follow us on YouTube"></i></a></li>
								<?php else: ?>
									<li>
								    <a href="https://www.youtube.com/user/theuniversityofutah" target="_blank">
								      <i class="fab fa-youtube"></i>
								    </a>
								  </li>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'pintrest' ) ) : ?>
								<li><a href="<?php echo get_theme_mod( 'pintrest' ); ?>" target="_blank"><i class="fab fa-pintrest" title="Follow us on Pintrest"></i></a></li>
								<?php else: ?>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'linkedin' ) ) : ?>
								<li><a href="<?php echo get_theme_mod( 'linkedin' ); ?>" target="_blank"><i class="fab fa-linkedin" title="Follow us on linkedin"></i></a></li>
								<?php else: ?>
							<?php endif; ?>
						</ul>
					</div>
					<!-- END FOOTER SOCIAL -->
				</div>
			</div>
			<!-- END BOTTOM FOOTER -->
		</footer>
		<!-- END FOOTER -->
		<!-- BACK TO TOP BTN -->
		<a href="#back-to-top" id="back-to-top-btn" class="back-to-top-btn" aria-label="back-to-top" title="back to top">
			<i class="fal fa-arrow-up"></i>
		</a>
		<!-- END BACK TO TOP BTN -->
	</div>
	<!-- END PAGE -->
	<!-- WP FOOTER -->
	<?php wp_footer(); ?>
	<!-- END WP FOOTER -->
	</body>
</html>
