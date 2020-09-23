jQuery(window).load(function ($) {


  // Marquee
  // Init Marquee
  var $marquee = $('.uu-hp-marquee').flickity({
    resize: true,
    wrapAround: true,
    autoPlay: true,
    cellSelector: '.slide',
    prevNextButtons: false,
    pageDots: false
  });

  // Flickity instance
  var flkty = $marquee.data('flickity');

  // up next element
  var $upNext = $('.up-next-tab');

  // up next tabs on slide change
  $marquee.on('select.flickity', function() {
    $upNext.filter('.active').removeClass('active');
    $upNext.eq(flkty.selectedIndex).addClass('active');
  });

  // Up Next Tabs on click
  $upNext.click(function() {
    var index = jQuery(this).index();
    $marquee.flickity( 'select', index -1 );
  });


  // SOCIAL TAB BUTTONS
  $(".social-tab-button").click(function (e) {
      e.stopPropagation();
      var a = $(this).data("target");
      $(".social-tab-button").removeClass("active"),
          $(this).addClass("active"),
          $(".social-tab").hide().addClass("hidden"),
          $("#" + a).show().removeClass("hidden");
  });

});
