<?php
/**
 * The header for UMCTHEME3
 *
 * @package umctheme3
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<!-- WP HEAD -->
		<?php wp_head(); ?>
		<!-- END WP HEAD -->

		<?php if ( get_theme_mod( 'gtm_pixel_id' ) ) : ?>
	  <!-- GTM PIXEL -->
	  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	  })(window,document,'script','dataLayer','<?php echo get_theme_mod( 'gtm_pixel_id' ); ?>');</script>
	  <!-- END GTM PIXEL -->
	  <?php endif; ?>

	  <?php if ( get_theme_mod( 'facebook_pixel_id' ) ) : ?>
	  <!-- FB PIXEL -->
	  <script>
	    !function(f,b,e,v,n,t,s)
	    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	    n.queue=[];t=b.createElement(e);t.async=!0;
	    t.src=v;s=b.getElementsByTagName(e)[0];
	    s.parentNode.insertBefore(t,s)}(window, document,'script',
	    'https://connect.facebook.net/en_US/fbevents.js');
	    fbq('init', '<?php echo get_theme_mod( 'facebook_pixel_id' ); ?>');
	    fbq('track', 'PageView');
	  </script>
	  <noscript><img height="1" width="1" style="display:none"
	    src="https://www.facebook.com/tr?id=<?php echo get_theme_mod( 'facebook_pixel_id' ); ?>&ev=PageView&noscript=1"
	  /></noscript>
	  <!-- END FB PIXEL -->
	  <?php endif; ?>
	</head>
	<body <?php body_class('uu-body'); ?>>
		<!-- WP BODY OPEN -->
		<?php wp_body_open(); ?>
		<!-- END WP BODY OPEN -->

		<?php if ( get_theme_mod( 'gtm_pixel_id' ) ) : ?>
	  <!-- GTM (noscript) -->
	  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo get_theme_mod( 'gtm_pixel_id' ); ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	  <!-- END GTM (noscript) -->
	  <?php endif; ?>

		<!-- SIDE NAV -->
		<?php include get_theme_file_path('inc/sidenav.php'); ?>
		<!-- END SIDE NAV -->

		<!-- PAGE -->
		<div id="page" class="site uu-page-container">
			<!-- HEADER -->
			<header id="header" class="uu-header fixed">

				<!-- ACCESSIBILITY BAR -->
				<!-- <?php include get_theme_file_path('inc/accessibility-bar.php'); ?> -->
				<!-- END ACCESSIBILITY BAR -->

				<?php if ( get_theme_mod( 'alert_bar_enable' ) ) : ?>
				<!-- ALERT BAR -->
				<div class="uu-alert-bar" id="alert_bar">
					<?php if ( get_theme_mod( 'alert_bar_url' ) ) : ?>
						<a href="<?php echo get_theme_mod( 'alert_bar_url' ); ?>">
					<?php endif; ?>
					<?php if ( get_theme_mod( 'alert_bar_message' ) ) : ?>
						<p>
							<?php echo get_theme_mod( 'alert_bar_message' ); ?>
							<?php if ( get_theme_mod( 'alert_bar_url' ) ) : ?>
								<i class="fal fa-long-arrow-right"></i>
							<?php endif; ?>
						</p>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'alert_bar_url' ) ) : ?>
						</a>
					<?php endif; ?>
				</div>
				<!-- END ALERT BAR -->
				<?php endif; ?>

				<div class="uu-bottom-header">
					<!-- HEADER LOGO -->
					<div id="header_logo" class="uu-header-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
					</div>
					<!-- END HEADER LOGO -->
					<!-- HEADER NAV -->
					<div id="header_nav" class="uu-header-nav">
						<?php
						wp_nav_menu( array(
							'theme_location' 		=> 'main_menu',
							'menu_id'        		=> 'primary-menu',
							'container_class' 	=> 'primary-menu-container',
							'depth'							=> '2'
						) );
						?>
					</div>
					<!-- END HEADER NAV -->
					<!-- SEARCH TOGGLE BTN -->
	        <div class="uu-search-toggle">
	          <div class="search-btn"><i class="far fa-search"></i></div>
	        </div>
	        <!-- END SEARCH TOGGLE BTN -->
					<!-- SIDENAV TOGGLE BTN -->
					<div class="uu-sidenav-toggle">
						<div id="sidenav_toggle_btn" class="hamburger uu-hamburger">
			        <div class="hamburger-box">
			          <div class="hamburger-inner"></div>
			        </div>
			      </div>
			    </div>
					<!-- END SIDENAV TOGGLE BTN -->
				</div>
			</header>
			<!-- END HEADER -->
			<!-- MOBILE QUICK NAV -->
			<div class="uu-mobile-quick-nav">
				<ul>
					<li>
						<a href="#">
							<i class="fal fa-graduation-cap"></i>
							APPLY
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fal fa-hands-heart"></i>
							GIVE
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fal fa-university"></i>
							VISIT
						</a>
					</li>
				</ul>
			</div>
			<!-- END MOBILE QUICK NAV -->
			<!-- SEARCH -->
			<div class="uu-search" id="main_search">
				<form method="get" class="uu-search-form" action="https://utah.edu/">
					<div class="input-group">
						<div class="search-icon">
							<i class="far fa-search"></i>
						</div>
						<input type="text" id="global_search_input" class="global-search-input" placeholder="Search U of U Campus">
					</div>
					<div class="form-powered-by">
						<span>Powered by</span> <img src="<?php echo get_template_directory_uri(); ?>/img/google-logo.png" alt="Powered By Google Search">
					</div>
				</form>
			</div>
			<!-- END SEARCH -->
