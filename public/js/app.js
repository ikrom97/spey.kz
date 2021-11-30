/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!****************************************!*\
  !*** ./resources/js/layouts/master.js ***!
  \****************************************/
//! Ajax request setup 
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
}); //! Scroll window to top (button event)

$("#top").click(function () {
  $("html, body").animate({
    scrollTop: 0
  }, "slow");
  return false;
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!****************************************!*\
  !*** ./resources/js/layouts/header.js ***!
  \****************************************/
var header = document.querySelector('.header');

if (header) {
  var sitesDropdown = header.querySelector('.sites-dropdown'),
      sitesDropdownBtn = sitesDropdown.querySelector('.sites-dropdown__button'),
      searchWrap = header.querySelector('.search'),
      searchBtn = searchWrap.querySelector('.search__button'),
      langsDropdown = header.querySelector('.langs-dropdown'),
      langsDropdownBtn = langsDropdown.querySelector('.langs-dropdown__button'),
      body = document.querySelector('body'); //* sites dropdown start

  sitesDropdownBtn.onclick = function (e) {
    e.preventDefault();
    sitesDropdown.classList.toggle('show');
  };

  body.addEventListener('click', function (e) {
    if (e.target.dataset.family != 'sites-dropdown' && sitesDropdown.classList.contains('show')) {
      sitesDropdown.classList.remove('show');
    }
  }); //* sites dropdown end
  //* search start

  searchBtn.onclick = function (e) {
    e.preventDefault();
    searchWrap.classList.toggle('show');
  };

  body.addEventListener('click', function (e) {
    if (e.target.dataset.family != 'search' && searchWrap.classList.contains('show')) {
      searchWrap.classList.remove('show');
    }
  }); //* search end
  //* langs dropdown start 

  langsDropdownBtn.onclick = function (e) {
    langsDropdown.classList.toggle('show');
  };

  body.addEventListener('click', function (e) {
    if (e.target.dataset.family != 'langs-dropdown' && langsDropdown.classList.contains('show')) {
      langsDropdown.classList.remove('show');
    }
  }); //* langs dropdown end
}
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!****************************************!*\
  !*** ./resources/js/layouts/footer.js ***!
  \****************************************/
var footer = document.querySelector('.footer');

if (footer) {
  //* Scroll to top start
  $("#top").click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, "slow");
    return false;
  }); //* Scroll to top start
}
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!**********************************************!*\
  !*** ./resources/js/components/news-card.js ***!
  \**********************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!***********************************************!*\
  !*** ./resources/js/components/pagination.js ***!
  \***********************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!**************************************************!*\
  !*** ./resources/js/components/products-card.js ***!
  \**************************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*************************************!*\
  !*** ./resources/js/pages/index.js ***!
  \*************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*******************************************!*\
  !*** ./resources/js/pages/about/index.js ***!
  \*******************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!**********************************************!*\
  !*** ./resources/js/pages/contacts/index.js ***!
  \**********************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!******************************************!*\
  !*** ./resources/js/pages/news/index.js ***!
  \******************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!**********************************************!*\
  !*** ./resources/js/pages/products/index.js ***!
  \**********************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*********************************************!*\
  !*** ./resources/js/pages/products/read.js ***!
  \*********************************************/

})();

/******/ })()
;