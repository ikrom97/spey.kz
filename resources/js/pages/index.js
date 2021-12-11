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
    })
    // values end
   
}