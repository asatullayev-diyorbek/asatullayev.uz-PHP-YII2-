$(document).ready(function(){

    $('#menu').click(function(){
        $(this).toggleClass('fa-times');
        $('header').toggleClass('toggle');
    });

    $(window).on('scroll load', function(){
        $('#menu').removeClass('fa-times');
        $('header').removeClass('toggle'); 

        if($(window).scrollTop() > 500){
            $('.top').show();
        }else{
            $('.top').hide();
        }
    });

    $('a[href*="#"]').on('click', function(e){

        e.preventDefault();

        $('html, body').animate({
            scrollTop : $($(this).attr('href')).offset().top,
        },
        800,
        'linear'
        );
    });

});

$(document).ready(function() {
    // Scroll hodisasi
    $(window).scroll(function() {
        var scrollPos = $(document).scrollTop();
        $('nav a').removeClass('active');
        $('nav a').each(function() {
            var currLink = $(this);
            var refElement = $(currLink.attr('href'));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('nav ul li a').removeClass('active');
                currLink.addClass('active');
            }
        });
    });
});
