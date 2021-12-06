//! Ajax request setup 
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//! Scroll window to top (button event)
$("#top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
});
//! vitrin dropdown start
const vitrinDropdown = document.querySelector('.vitrin-dropdown');
if (vitrinDropdown) {
    const dropdownBtn = vitrinDropdown.querySelector('.vitrin-dropdown__button'),
        body = document.querySelector('body');

    dropdownBtn.onclick = () => {
        vitrinDropdown.classList.toggle('show');
    };

    body.addEventListener('click', e => {
        if (e.target.dataset.family != 'vitrin-dropdown') {
            vitrinDropdown.classList.remove('show');
        }
    });
}
//! vitrin dropdown end