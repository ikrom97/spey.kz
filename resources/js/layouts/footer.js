const footer = document.querySelector('.footer');

if (footer) {
    //* Scroll to top start
    $("#top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    //* Scroll to top start
    //* show hide mobile navigation start
    const navBtns = footer.querySelectorAll('[data-action="show"]'),
        navs = footer.querySelectorAll('.footer-navigation');
    navBtns.forEach(button => {
        button.onclick = () => {
            // navs.forEach(nav => {
            //     nav.classList.remove('show');
            // });
            button.parentNode.classList.toggle('show');
        };
    });
    //* show hide mobile navigation end
}