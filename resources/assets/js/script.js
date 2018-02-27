$(document).ready(function () {

    $('.hamburger').click(function () {
        $(this).toggleClass('is-active');
    });

    $(".scroll").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"}, 1000);
        return false;
    });

    $('p, h1, h2, h3, h4, h5, span, a').hyphenate();

    $('#feedback').validate({
        rules: {
            name: {
                required: true
            },
            telephone: {
                required: true,
                number: true
            },
            massege: {
                required: true
            }
        }
    });

    autosize($('textarea'));

    $('.slick-slider--show').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        draggable: false,
        asNavFor: '.slick-slider--prev'
    });

    $('.slick-slider--prev').slick({
        variableWidth: true,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.slick-slider--show',
        draggable: false,
        focusOnSelect: true
    });

    $('.about_command--slick').slick({
        variableWidth: true,
        responsive:[
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.about_comment--slick').slick({
        variableWidth: true,
        responsive:[
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

});