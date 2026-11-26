// interface.js
var seismion = {
  hamburger: function() {
    var $toggler = $('button.navbar-toggler');
    $navbar = $('.navbar-collapse');
    $toggler.on('touchend', function(e) {
      var $hamburger = $(this).find('a.hamburger');
      $hamburger.toggleClass('active');
      $navbar.toggleClass('show');
      console.log($navbar);
    });
  }

}

$(document).ready(function() {
  console.log('seismion.js'); 
  // seismion.headerScroll();
  //seismion.hamburger();
});
