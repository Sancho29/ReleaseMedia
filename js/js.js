
$(document).ready(function(){

    function scrollToAnchor(id){
        var goTo = $(id);
        $('html,body,header').animate({scrollTop: goTo.offset().top},'slow');
    }

    $('.link').click(function(e) {
		e.preventDefault();
							  
        var linkId = $(this).attr('href'); 
			
        scrollToAnchor(linkId);
    });

    $('.link.mobile').click(function(e) {
        e.preventDefault();
        $("nav.nav-mobile").slideUp("slow");  
    })

    $('.btn-navbar').click(function(e) {
        e.preventDefault();
        if ($('nav.nav-mobile').is(':hidden')) {
            $("nav.nav-mobile").slideDown("slow"); 
        } else {
            $("nav.nav-mobile").slideUp("slow");  
        }
    });

});



