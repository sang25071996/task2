$(document).ready(function () {
    $("#slide").slick({
        // breakpoint: 850,
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 500,
        speed: 300,
        slidesToShow: 4,
        centerMode: false,
        variableWidth: false,
        slidesToScroll: 1,
        prevArrow: false,
        nextArrow: false,
        responsive:[
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 755,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }

        ]
    });
})