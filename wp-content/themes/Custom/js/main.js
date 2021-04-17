// $('header').addClass('scrolled_header');
let header_height = $('header').height();

console.log(header_height);

$('body').css('padding-top', header_height);

$(window).scroll(function() {
    let scrolled_heigh = $(window).scrollTop();
    // if (scrolled_heigh > header_height) {
    //     $('header').css('position', 'fixed');
    //     $('header').css('visibillity', 'hidden');
    // }
    if (scrolled_heigh > 0) {
        $('header').addClass('scrolled_header');
    } else {
        $('header').removeClass('scrolled_header');
    }
});