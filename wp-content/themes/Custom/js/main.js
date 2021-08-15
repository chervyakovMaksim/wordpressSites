let headerHeight = $('header').height();

$('body').css('padding-top', headerHeight);

$(window).scroll(function() {
    let scrolledHeigh = $(window).scrollTop();
    // if (scrolled_heigh > header_height) {
    //     $('header').css('position', 'fixed');
    //     $('header').css('visibillity', 'hidden');
    // }
    if (scrolledHeigh > 0) {
        $('header').addClass('scrolled_header');
    } else {
        $('header').removeClass('scrolled_header');
    }
});