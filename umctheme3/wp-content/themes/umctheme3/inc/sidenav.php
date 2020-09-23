<?php
/**
 * The side navigation for UMCTHEME3
 *
 * @package umctheme3
 */
?>
<div id="sidenav" class="uu-sidenav">
  <!-- MOBILE SIDENAV TOGGLE BTN -->
  <div class="uu-mobile-sidenav-toggle">
    <div id="mobile_sidenav_toggle_btn" class="hamburger uu-hamburger sidenav-open">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </div>
  </div>
  <!-- END MOBILE SIDENAV TOGGLE BTN -->
  <!-- SIDENAV HEADER -->
  <div class="uu-sidenav-header">
    <div class="uu-sidenav-header-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="uu-sidenav-dept-logo">
        <?php if ( get_theme_mod( 'dept-logo' ) ) : ?>
          <img src="<?php echo get_theme_mod( 'dept-logo' ); ?>" alt="" title="">
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri() . '/img/universityofutah.svg' ?>" alt="University of Utah Logo" title="University of Utah">
        <?php endif; ?>
      </a>
    </div>
  </div>
  <!-- END SIDENAV HEADER -->
  <!-- SIDENAV MENU 1 -->
  <div class="uu-sidenav-menu-block">
    <?php
      $menu1_location = 'sidenav_menu1';
      $theme_locations = get_nav_menu_locations();
      if (array_key_exists($menu1_location, $theme_locations)) {
        $menu1_obj = get_term( $theme_locations[$menu1_location], 'nav_menu' );
        $menu1_name = $menu1_obj->name;

        if ( has_nav_menu( $menu1_location ) ) :
            echo '<h3>'. $menu1_name .'</h3><hr class="left">';
            wp_nav_menu( array(
              'theme_location'    => $menu1_location,
              'menu_class'        => 'sidenav-menu',
              'container'         => false,
              'before'            => '<h3>',
              'after'             => '</h3>',
              'items_wrap'        => '<ul id="%1$s" class="%2$s" rel="top">%3$s</ul>'
            ));
        endif;
      }
    ?>
  </div>
  <!-- END SIDENAV MENU 1 -->
  <!-- SIDENAV MENU 2 -->
  <div class="uu-sidenav-menu-block">
    <?php
      $menu2_location = 'sidenav_menu2';
      $theme_locations = get_nav_menu_locations();
      $menu2_obj = get_term( $theme_locations[$menu2_location], 'nav_menu' );
      $menu2_name = $menu2_obj->name;

      if ( has_nav_menu( $menu2_location ) ) :
          echo '<h3>'.esc_html($menu2_name).'</h3><hr class="left">';
          wp_nav_menu( array(
            'theme_location'    => $menu2_location,
            'menu_class'        => 'sidenav-menu',
            'container'         => false,
            'before'            => '<h3>',
            'after'             => '</h3>',
            'items_wrap'        => '<ul id="%1$s" class="%2$s" rel="top">%3$s</ul>'
          ));
      endif;
    ?>
  </div>
  <!-- END SIDENAV MENU 2 -->
  <!-- SIDENAV MENU 3 -->
  <div class="uu-sidenav-menu-block">
    <?php
      $menu3_location = 'sidenav_menu3';
      $theme_locations = get_nav_menu_locations();
      $menu3_obj = get_term( $theme_locations[$menu3_location], 'nav_menu' );
      $menu3_name = $menu3_obj->name;

      if ( has_nav_menu( $menu3_location ) ) :
          echo '<h3>'.esc_html($menu3_name).'</h3><hr class="left">';
          wp_nav_menu( array(
            'theme_location'    => $menu3_location,
            'menu_class'        => 'sidenav-menu',
            'container'         => false,
            'before'            => '<h3>',
            'after'             => '</h3>',
            'items_wrap'        => '<ul id="%1$s" class="%2$s" rel="top">%3$s</ul>'
          ));
      endif;
    ?>
  </div>
  <!-- END SIDENAV MENU 3 -->
  <!-- SIDENAV FOOTER -->
  <div class="uu-sidenav-footer">

  </div>
  <!-- END SIDENAV FOOTER -->
</div>
