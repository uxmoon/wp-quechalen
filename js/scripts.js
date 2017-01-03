( function( $ ) {

  $(document).ready(function(){

    var navigationContainer = $('#site-navigation'),
      mainNavigation = navigationContainer.find('.c-anchor-nav ul');

    //open or close the menu clicking on the bottom "menu" link
    $('.menu-toggle').on('click', function(){
      $(this).toggleClass('menu-is-open');
      //we need to remove the transitionEnd event handler (we add it when scolling up with the menu open)
      mainNavigation.off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend').toggleClass('is-visible');
    });

    // Slider
    $('.c-carousel').slick({
      dots: false,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
    });

    // Tabs - Based on https://codepen.io/cssjockey/pen/jGzuK
    $('.c-nav-inner li').click(function(){
      var tab_id = $(this).attr('data-tab');

      $('.c-nav-inner li').removeClass('current');
      $('.tab-content').removeClass('current');

      $(this).addClass('current');
      $("#"+tab_id).addClass('current');

      // Required to fix slick slider inside tabs
      $("#"+tab_id+" .c-carousel").slick('setPosition');
    })

    // Source: https://wordpress.org/support/topic/replace-ajax-loader-with-font-awsome-spinner/

    // Adding icon spinner, hidden by default
    $( ".wpcf7-submit" ).after( '<svg class="icon icon-spinner animate-spin" style="visibility: hidden;"><use xlink:href="#icon-spinner"></use></svg>' );

    // Show new spinner on Send button click
    $('.wpcf7-submit').on('click', function () {
        $('.icon-spinner').css({ visibility: 'visible' });
    });

    // Hide new spinner on result
    $('.wpcf7').on('wpcf7:invalid wpcf7:spam wpcf7:mailsent wpcf7:mailfailed', function () {
        $('.icon-spinner').css({ visibility: 'hidden' });
    });

    // q_gallery
    lightbox.option({
      albumLabel: "Foto %1 de %2",
    });

  });

} )( jQuery );
