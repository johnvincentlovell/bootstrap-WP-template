;(function($){
	// Shrink Nav Bar, Scroll Header Image
	$(document).on("scroll", function(){
		if
      ($(document).scrollTop() > 125){
			$(".navbar").addClass("shrink-nav");
			$(".navbar-toggle").addClass("shrink-navbar-toggle");
			$(".logo").addClass("shrink-logo");
			$(".logoB").addClass("shrink-logoB");
			$(".uparrow").addClass("shrink-uparrow");
			$(".uparrow-out").addClass("scroll-uparrow-out");
			$("ul#menu-header-menu").addClass("shrink-nav-menu");
			$(".contact").addClass("shrink-contact");
			$("#topintro").addClass("scroll-topintro");
			$(".learnmore").addClass("learnmore-scroll");
		}
		else
		{
			$(".navbar").removeClass("shrink-nav");
			$(".navbar-toggle").removeClass("shrink-navbar-toggle");
			$(".logo").removeClass("shrink-logo");
			$(".logoB").removeClass("shrink-logoB");
			$(".uparrow").removeClass("shrink-uparrow");
			$(".uparrow-out").removeClass("scroll-uparrow-out");
			$("ul#menu-header-menu").removeClass("shrink-nav-menu");
			$(".contact").removeClass("shrink-contact");
			$("#topintro").removeClass("scroll-topintro");
			$(".learnmore").removeClass("learnmore-scroll");
		}
	});

$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
        $(this).collapse('hide');
    }
});

// This entire section makes Bootstrap Modals work with iOS
// This entire section makes Bootstrap Modals work with iOS
if( navigator.userAgent.match(/iPhone|iPad|iPod/i) ) {

  $('.modal').on('show.bs.modal', function() {
    setTimeout(function () {
      scrollLocation = $(window).scrollTop();
      $('.modal')
          .addClass('modal-ios')
          .height($(window).height())
          .css({'margin-top': scrollLocation + 'px'});
    }, 0);
  });

  $('input').on('blur', function(){
    setTimeout(function() {
      // This causes iOS to refresh, fixes problems when virtual keyboard closes
      $(window).scrollLeft(0);

      var $focused = $(':focus');
      // Needed in case user clicks directly from one input to another
      if(!$focused.is('input')) {
        // Otherwise reset the scoll to the top of the modal
        $(window).scrollTop(scrollLocation);
      }
    }, 0);
  });

}

$(document).on("click", ".blog-post", function(){
	window.location=$(this).find("a:first").attr("href");
	return false;
});

$(".blog-post").css( "cursor", "pointer" );


})(jQuery);