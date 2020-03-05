$(document).ready(function() {
    $('.flexslider').flexslider({
        touch: true,
        pauseOnAction: false,
        pauseOnHover: false,
    });
    
    //Button up
    $('.up').hide();
    $(window).scroll(function(e) {
        if ($(this).scrollTop() > 100) {
            $('.up').fadeIn('1000');
        } else {
            $('.up').fadeOut('1000');
        }
    });
    $('.up').click(function(e) {
        $('body, html').animate({
            scrollTop: 0
        }, 50);
    });
     // Drop Services
    $('#btnMoreService').click(function() {
            $('#contMore').slideToggle();
    });
     $('#btnMoreService2').click(function() {
            $('#contMore2').slideToggle();
    });
     $('#btnMoreService3').click(function() {
            $('#contMore3').slideToggle();
    });
});