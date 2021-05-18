scroll_to();
custom_slider();

$(window).on('load', function () {

});

function scroll_to() {
    $("#scroll-down").click(function () {
        $('html, body').animate({
            scrollTop: $("#main").offset().top
        }, 750);
    });
}

function custom_slider() {
    var sliderTitle = $('.slider .meta .title');
    var sliderDesc = $('.slider .meta .desc')

    $('.top-slider').slick({
        arrows: true,
        dots: true,
        slidesToShow: 1,
        prevArrow: $('.prev'),
        nextArrow: $('.next')
        
    });

    $('.top-slider').on('afterChange', function (event, slick, currentSlide, nextSlide) {
        var elSlide = $(slick.$slides[currentSlide]);
        var title = elSlide.data('title');
        var desc = elSlide.data('desc');

        sliderTitle.html(title);
        sliderDesc.html(desc);
    });
}