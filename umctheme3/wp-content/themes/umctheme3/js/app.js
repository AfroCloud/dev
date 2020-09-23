jQuery(document).ready( function() {

  // VARS
  var $html = jQuery('html');
  var $page = jQuery('#page');
  var $content = jQuery('#primary');
  var $alert_bar = jQuery('.uu-alert-bar');
  var $acc_bar = jQuery('#uu-acc-bar');
  var $sidenav = jQuery('#sidenav');
  var $nav_toggle = jQuery('#sidenav_toggle_btn');
  var $mobile_nav_toggle = jQuery('#mobile_sidenav_toggle_btn');
  var $search_btn = jQuery('.search-btn');
  var $main_search = jQuery('#main_search');
  var $search_input = jQuery('#global_search_input');
  var $parent_menu_item = jQuery('.sidenav-menu li.menu-item-has-children > h3 > a');
  var $scroll_top_btn = jQuery('#back-to-top-btn');
  var interval = setInterval(checkInterval, 500); // Set interval to every half second

  getHeaderHeight();

  // SIDENAV TOGGLE
  $nav_toggle.on('click', function() {
    jQuery(this).toggleClass('sidenav-open');
    $page.toggleClass('sidenav-open').removeClass('search-open');
    $sidenav.toggleClass('sidenav-open');
    $html.toggleClass('sidenav-open').removeClass('search-open');
    $main_search.removeClass('search-open');
    $search_btn.removeClass('search-open');
    // RUN SO RESET/RESIZE
    stretchFullWidthRows();
  });

  $parent_menu_item.on('click', function(e) {
    e.preventDefault();
    jQuery(this).closest('.menu-item-has-children').toggleClass('nav-open');
    jQuery(this).closest('.menu-item-has-children').find('> .sub-menu').slideToggle();
  });

  // MOBILE NAV TOGGLE
  $mobile_nav_toggle.on('click', function(){
    sideNavClose();
  })

  // SEARCH BAR
  $search_btn.on('click', function(e) {
    e.stopPropagation();
    $search_btn.toggleClass('search-open');
    $page.toggleClass('search-open').removeClass('sidenav-open');
    $html.toggleClass('search-open').removeClass('sidenav-open');
    $main_search.toggleClass('search-open');
    $sidenav.removeClass('sidenav-open');
    $search_input.focus();
    sideNavClose();
  });

  // CHECK INTERVAL
  function checkInterval(e) {
      // CLOSE SIDENAV ON PAGE CLICK
      if ($page.hasClass('sidenav-open')) {
        $page.on('click', function() {
          sideNavClose();
        });
      } else {
        $page.off();
      }
  };

  jQuery(document).mouseup(function(e)  {
    if ( ! $search_input.is(e.target) && $search_input.has(e.target).length === 0 ) {
      searchClose();
    } else {
      $page.off();
    }
  });

  // ACCESSIBILITY BAR
  jQuery(document).keyup(function(e) {
     if(e.altKey && e.keyCode == 191){
       console.log('Accessibilty Bar Toggled');
       $html.toggleClass('acc-bar-open');
       $acc_bar.toggleClass('acc-bar-open');

       getHeaderHeight();

     }
   });

  // SHOW SCROLL TO TOP BTN AFTER 100PX SCROLLED
  jQuery(window).scroll(function() {
    if (jQuery(document).scrollTop() > 300) {
      $scroll_top_btn.addClass('active');
    } else {
      $scroll_top_btn.removeClass('active');
    }
  });

  // ON CLICK SCROLL TO TOP
  $scroll_top_btn.on('click', function(e) {
    e.preventDefault();
    scrollToTop();
  });


  // SCROLL TO TOP
  function scrollToTop() {
    jQuery(window).scrollTop(0);
  }

  // REMOVE CLASSES WHEN SIDENAV IS CLOSED
  function sideNavClose() {
    $nav_toggle.removeClass('sidenav-open');
    $page.removeClass('sidenav-open');
    $sidenav.removeClass('sidenav-open');
    $html.removeClass('sidenav-open');
  }

  // REMOVE CLASSES WHEN SEARCH IS CLOSED
  function searchClose() {
    $search_btn.removeClass('search-open');
    $page.removeClass('search-open');
    $html.removeClass('search-open');
    $main_search.removeClass('search-open');
  }

  // ANIMATE ON SCROLL INIT
  // INIT AOS
  AOS.init({
    easing: 'ease-out',
  });
  // STAGGER AOS ANIMATIONS
  var delay = 0;
  jQuery('.aos-container > [data-aos]').each(function() {
     if (jQuery(this).is(":visible")) {
       delay = delay + 50;
       jQuery(this).attr('data-aos-delay', delay);
     }
  });


});

// GET HEADER HIGHT & UPDATE CONTENT AREA TOP MARGIN
function getHeaderHeight() {
  var $header = jQuery('#header');
  var $content = jQuery('#primary');
  var header_x = $header.outerHeight(false);

  $content.css({'margin-top': header_x});
  console.log("Header Height:" + header_x);
}

// SITEORIGIN(SO) RESET/RESIZE
fullContainer = jQuery( '.site' );

// STRETCH FULLWIDTH ROWS
function stretchFullWidthRows() {
  var $panelsRow = jQuery( '.siteorigin-panels-stretch.panel-row-style' );
  $panelsRow.each( function () {
    var $$ = jQuery( this );

    var stretchType = $$.data( 'stretch-type' );
    var defaultSidePadding = stretchType === 'full-stretched-padded' ? '' : 0;

    // RESET STYLES ASSOCIATED WITH ROW STRETCHING
    $$.css( {
      'margin-left': 0,
      'margin-right': 0,
      'padding-left': defaultSidePadding,
      'padding-right': defaultSidePadding
    } );

    var leftSpace = $$.offset().left - fullContainer.offset().left,
      rightSpace = fullContainer.outerWidth() - leftSpace - $$.parent().outerWidth();

    $$.css( {
      'margin-left': - leftSpace,
      'margin-right': - rightSpace,
      'padding-left': stretchType === 'full' ? leftSpace : defaultSidePadding,
      'padding-right': stretchType === 'full' ? rightSpace : defaultSidePadding
    } );

    var cells = $$.find( '> .panel-grid-cell' );

    if ( stretchType === 'full-stretched' && cells.length === 1 ) {
      cells.css( {
        'padding-left': 0,
        'padding-right': 0
      } );
    }

    $$.css( {
      'border-left': defaultSidePadding,
      'border-right': defaultSidePadding
    } );
  } );

  if ( $panelsRow.length ) {
    jQuery( window ).trigger( 'panelsStretchRows' );
  }
}
