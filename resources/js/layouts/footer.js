const footer = document.querySelector('.footer');

if (footer) {
    //* Scroll to top start
    $("#top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    //* Scroll to top start
}