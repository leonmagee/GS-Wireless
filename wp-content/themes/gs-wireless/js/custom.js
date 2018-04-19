jQuery(document).foundation();

jQuery(function ($) {

    $('.menu-toggle').click(function() {
        $('nav.main-navigation-custom').toggleClass('menu-hidden');
    });


    $('#site-navigation-custom li').click(function() {
        $(this).toggleClass('active-nav');
    });

});