$( document ).ready(function() {

    // Slider testimonials

    var swiper = new Swiper('.slider-testimonials', {
        slidesPerView: 2,
        allowTouchMove: true,
        navigation: {
            nextEl: '.swiper-button-next-testim',
            prevEl: '.swiper-button-prev-testim',
        },
        breakpoints: {
            992: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 30,
            }
        },
    });

    // Slider Cloud

    var swiper = new Swiper('.slider-cloud', {
        slidesPerView: 1,
        allowTouchMove: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    // Slider Reach

    var swiper = new Swiper('.swiper-reach', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    // Slider Compatibility


    var swiper = new Swiper('.swiper-compatibility', {
        slidesPerView: 2,
        allowTouchMove: true,
        navigation: {
            nextEl: '.button-next',
            prevEl: '.button-prev',
        },
    });

    // Show more/less table

    var table = $('.events_table .container .table');

    $(".table-more").click(function () {
        if($(table).hasClass("more")) {
            $(this).text("Show more");
        } else {
            $(this).text("Show less");
        }

        $(table).toggleClass("more");
    });

});



