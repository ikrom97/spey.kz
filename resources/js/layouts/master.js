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