const body = document.querySelector('body'),
    homePage = body.querySelector('.home-page');

if (homePage) {
    // values start
    $('.values-carousel').owlCarousel({
        loop: true,
        lazyLoad: true,
        nav: false,
        autoWidth: true,
        items: 6,
        responsive: {
            0: {
                margin: 32,
            },
            576: {
                margin: 32,
            },
            992: {
                margin: 48,
            }
        }
    });
    // values end
    // industry-news start
    $('.industry-news-carousel').owlCarousel({
        loop: true,
        lazyLoad: true,
        nav: false,
        autoWidth: true,
        responsive: {
            0: {
                margin: 32,
                items: 1,
            },
            576: {
                margin: 32,
                items: 3,
            },
            992: {
                margin: 96,
                items: 4,
            }
        }
    });
    // industry-news end
    // popular products carousel start
    $('.popular-products-carousel').owlCarousel({
        loop: false,
        lazyLoad: true,
        mouseDrag: false,
        nav: false,
        autoWidth: false,
        responsive: {
            0: {
                loop: true,
                margin: 0,
                items: 1,
            },
            715: {
                mouseDrag: true,
                loop: true,
                margin: 24,
                items: 2,
            },
            992: {
                margin: 0,
                items: 6,
            }
        }
    });
    // popular products carousel end

}