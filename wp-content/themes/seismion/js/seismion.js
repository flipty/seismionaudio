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
  },

  headerScroll: function() {
    var $pxScrolled = 350;
    $(window).scroll(function() {
      if ($(document).scrollTop() > $pxScrolled) {
        $('body').addClass('scrolled');
      } else {
        $('body').removeClass('scrolled');
      }
    });
    if ($(document).scrollTop() > $pxScrolled) {
      $('body').addClass('scrolled');
    }
  }


}

$(document).ready(function() {
  // seismion.headerScroll();
  seismion.hamburger();
});
