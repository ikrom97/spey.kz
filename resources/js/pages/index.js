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
            575: {
                margin: 32,
            },
            991: {
                margin: 48,
            }
        }
    })
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
            575: {
                margin: 32,
                items: 3,
            },
            991: {
                margin: 96,
                items: 4,
            }
        }
    })
    // industry-news end
   
}