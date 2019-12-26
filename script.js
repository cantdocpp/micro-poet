let hamburgerClicked = false;

jQuery(document).ready(function($) {
  // Inside of this function, $() will work as an alias for jQuery()
  // and other libraries also using $ will not be accessible under this shortcut
  let pass
  $('.hamburger__menu').on('click', function(){
    var className = 'toggle__menu'
    $(this).toggleClass('on');
    if (!hamburgerClicked) {
      $('.' + className).removeClass('toggle-slide-out')
      $('.toggle__menu').addClass('toggle-slide-in')
      hamburgerClicked = true;
    } else {
      $('.' + className).removeClass('toggle-slide-in')
      $('.toggle__menu').addClass('toggle-slide-out')
      hamburgerClicked = false
    }
    
  })
});