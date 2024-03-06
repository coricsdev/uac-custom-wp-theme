jQuery(document).ready(function($) {
$('.header .icon-search').on('click', function () {
    $(".searchbar").toggleClass("active");
});

// Sticky Header Start
jQuery(document).ready(function($) {
$(window).scroll(function () {
    var fromTopPx = 200;
    var scrolledFromtop = $(window).scrollTop();
    if (scrolledFromtop > fromTopPx) {
        $('header.header').addClass('fixed');
        $('body').addClass('header-fixed');
    } else {
        $('header.header').removeClass('fixed');
        $('body').removeClass('header-fixed');
    }
});
});
// Sticky Header End
jQuery(document).ready(function($) {
$('.home-slider').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive: {
        0: {
            items: 1
        }
    }
});
});
jQuery(document).ready(function($) {
$('.service-owl').owlCarousel({
    loop: true,
    margin: 16,
    nav: true,
    autoplay: false,
    items: 1,
    responsive: {
        0: {
            items: 1,
            stagePadding: 36,
        },
        992: {
            items: 1,
            stagePadding: 0,
        },
        768: {
            items: 3,
            stagePadding: 20,
        },
        500: {
            items: 2,
            stagePadding: 20,
        },
    }
});
});
jQuery(document).ready(function($) {
$('.testi-owl').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    autoplay: false,
    responsive: {
        0: {
            items: 1
        }
    }
});
});
jQuery(document).ready(function($) {
$('.covid-message .removeit').on('click', function () {
    $(this).closest(".covid-message").remove();
});
});

// Fun Fact 
jQuery(document).ready(function($) {
$(document).ready(function () {
    $(".fun-fact-owl.owl-carousel").owlCarousel({
        loop: true,
        items: 1,
        margin: 0,
        stagePadding: 0,
        autoplay: false,
        nav: true,
    });
});
    dotcount = 1;
    jQuery(document).ready(function($) {
    $('.fun-fact-owl .owl-dot').each(function () {
        $(this).addClass('dotnumber' + dotcount);
        $(this).attr('data-info', dotcount);
        dotcount = dotcount + 1;
    });
    });
    slidecount = 1;
    jQuery(document).ready(function($) {
    $('.fun-fact-owl .owl-item').not('.cloned').each(function () {
        $(this).addClass('slidenumber' + slidecount);
        slidecount = slidecount + 1;
    });
    });
    jQuery(document).ready(function($) {
    $('.fun-fact-owl .owl-dot').each(function () {
        grab = $(this).data('info');
        slidegrab = $('.slidenumber' + grab + ' img').attr('src');
        $(this).css("background-image", "url(" + slidegrab + ")");
    });
    });
    amount = $('.fun-fact-owl .owl-dot').length;
    gotowidth = 100 / amount;

});
});

// Back to Top
jQuery(document).ready(function($) {
$(".back-top .learn-more").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1000);
});
});
