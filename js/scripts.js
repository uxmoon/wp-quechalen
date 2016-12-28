( function( $ ) {

  var navigationContainer = $('#site-navigation'),
    mainNavigation = navigationContainer.find('.c-anchor-nav ul');

  //open or close the menu clicking on the bottom "menu" link
  $('.menu-toggle').on('click', function(){
    $(this).toggleClass('menu-is-open');
    //we need to remove the transitionEnd event handler (we add it when scolling up with the menu open)
    mainNavigation.off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend').toggleClass('is-visible');

  });

  // Tabs - Based on https://codepen.io/cssjockey/pen/jGzuK

  $('.c-nav-inner li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('.c-nav-inner li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })

  $('.c-carousel').slick();


} )( jQuery );
