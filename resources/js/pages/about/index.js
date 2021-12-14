const aboutPage = document.querySelector('.about-page');

if (aboutPage) {
    const body = document.querySelector('body');
    //* histories start
    const view = window.screen.width,
        histories = aboutPage.querySelector('.histories'),
        historiesItems = histories.querySelectorAll('.histories__item'),
        viewAllBtn = aboutPage.querySelector('.our-history__view-all-btn');
    // construct initial position
    let initialHiddens = function () {
        viewAllBtn.classList.add('hidden');
        historiesItems.forEach((item, index) => {
            const row = Math.ceil((index + 1) / 3);
            item.dataset.row = row;
            if (index < 9) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    }

    if (view < 576) {
        initialHiddens = function () {
            viewAllBtn.classList.add('hidden');
            historiesItems.forEach((item, index) => {
                const row = Math.ceil((index + 1) / 1);
                item.dataset.row = row;
                if (index < 6) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        }
    } else if (view < 992) {
        initialHiddens = function () {
            viewAllBtn.classList.add('hidden');
            historiesItems.forEach((item, index) => {
                const row = Math.ceil((index + 1) / 2);
                item.dataset.row = row;
                if (index < 6) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        }
    }
    function initialShows() {
        historiesItems.forEach(item => {
            item.classList.remove('show');
        });
    }
    function removeHiddens() {
        historiesItems.forEach(item => {
            viewAllBtn.classList.remove('hidden');
            item.classList.remove('hidden');
        });
    }
    initialHiddens();
    // add events
    historiesItems.forEach(item => {
        const titles = item.querySelectorAll('.histories__title'),
            row = item.dataset.row;
        titles.forEach(title => {
            title.onclick = () => {
                const Items = histories.querySelectorAll(`[data-row="${row}"]`);
                if (title.parentNode.classList.contains('show')) {
                    initialShows();
                } else {
                    initialShows();
                    Items.forEach(item => {
                        item.classList.add('show');
                    });
                }

            };
        });
    });
    // show hide all event
    viewAllBtn.onclick = e => {
        e.preventDefault();
        if (viewAllBtn.classList.contains('hidden')) {
            removeHiddens();
        } else {
            initialHiddens();
        }
    };
    // remove all
    body.onclick = e => {
        if (e.target.dataset.family != 'history') {
            initialHiddens();
            initialShows();
        }
    };
    //* histories start
    //* company in numbers start
    $('.company-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
        margin: 24,
        // autoWidth: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            992: {
                items: 3,
            }
        }
    })
    //* company in numbers end
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
    $('.rdp-areas-carousel').owlCarousel({
        // loop: true,
        // autoplay: true,
        // autoplayTimeout: 3000,
        // autoplayHoverPause: true,
        margin: 16,
        nav: true,
        items: 1,
        responsive: {
            0: {
                margin: 0,
            },
            576: {
                margin: 0,
            },
            992: {
                margin: 0,
            }
        }
    })
}