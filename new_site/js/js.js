
$(document).ready(function(){
    // defaults
    // var st, win = $(window)[0],
    //     body = $('body')[0],
    //     doc = (jQuery.support.boxModel) ? document.documentElement : document.body,
    //     wrap = $('#wrapper')[0],

    // // Set top background image height here
    //     imgH = 3000; // top image height

    // // vertical parallax scroll
    // $(win).scroll(function(){
    //     st = (win.pageYOffset || doc.scrollTop );
    //     if (st < imgH) { wrap.style.backgroundPosition = 'center ' + (st/4) + 'px'; } // limit moving top image only when in view
    //     body.style.backgroundPosition = 'left ' + ( imgH + st/4) + 'px';
    // });

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
        $('nav.nav-mobile').toggleClass('show');
        $('header').toggleClass('expand');
        $('.block.home').toggleClass('expand');
    })

    $('.btn-navbar').click(function(e) {
        e.preventDefault();
                              
        $('nav.nav-mobile').toggleClass('show');
        $('header').toggleClass('expand');
        $('.block.home').toggleClass('expand');
    });

});



