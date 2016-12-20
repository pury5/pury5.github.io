$(document).ready(function(){
    $('#nav-portfolio').click( function(){
        var scroll_el = $('#portfolio');
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500);

    });
    $('#nav-about').click( function(){
        var scroll_el = $('#about');
        $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500);
    });
    $('#nav-contacts').click( function(){
        var scroll_el = $('#contacts');
        $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500);
    });
});