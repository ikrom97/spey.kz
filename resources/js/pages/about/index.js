const aboutPage = document.querySelector('.about-page');

if (aboutPage) {
    const historyItems = aboutPage.querySelectorAll('.histories__item'),
        viewAllBtn = aboutPage.querySelector('.our-history__view-all-btn'),
        body = document.querySelector('body');
    //* histories start
    // show row of histories
    historyItems.forEach(item => {
        item.addEventListener('click', () => {
            const row = item.dataset.row;

            historyItems.forEach(history => {
                if (history.dataset.row != row) {
                    history.classList.remove('show');
                } else if (history.dataset.row == row && !history.classList.contains('show')) {
                    history.classList.add('show');
                } else if (history.dataset.row == row && history.classList.contains('show')) {
                    history.classList.remove('show');
                }
            });
        })
    });
    body.addEventListener('click', e => {
        if (e.target.dataset.family != 'history') {
            historyItems.forEach(history => {
                if (history.classList.contains('show')) {
                    history.classList.remove('show');
                }
            });
        }
    });
    // show all histories
    viewAllBtn.onclick = () => {
        viewAllBtn.classList.toggle('show');
        historyItems.forEach((item, index) => {
            if (index > 8) {
                item.classList.toggle('hidden');
            }
        });
    };
    body.addEventListener('click', e => {
        if (e.target.dataset.family != 'history') {
            historyItems.forEach((item, index) => {
                if (index > 8) {
                    item.classList.add('hidden');
                    viewAllBtn.classList.remove('show');
                }
            });
        }
    });
    //* histories start
    //* company in numbers start
    $('.company-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
        margin: 25,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
    //* company in numbers end
    $('.rdp-areas-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
        responsive: {
            0: {
                items: 1
            }
        }
    })
}