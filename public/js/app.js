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
}); //! vitrin dropdown start

var vitrinDropdown = document.querySelector('.vitrin-dropdown');

if (vitrinDropdown) {
  var dropdownBtn = vitrinDropdown.querySelector('.vitrin-dropdown__button'),
      body = document.querySelector('body');

  dropdownBtn.onclick = function () {
    vitrinDropdown.classList.toggle('show');
  };

  body.addEventListener('click', function (e) {
    if (e.target.dataset.family != 'vitrin-dropdown') {
      vitrinDropdown.classList.remove('show');
    }
  });
} //! vitrin dropdown end
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
/*!************************************!*\
  !*** ./resources/js/auth/login.js ***!
  \************************************/
var loginPage = document.querySelector('.login-page');

if (loginPage) {
  var visibilityBtn = loginPage.querySelector('.login-eye-btn'),
      passwordInput = loginPage.querySelector('#password');

  visibilityBtn.onclick = function () {
    if (visibilityBtn.classList.contains('show')) {
      visibilityBtn.classList.remove('show');
      passwordInput.setAttribute('type', 'password');
    } else {
      visibilityBtn.classList.add('show');
      passwordInput.setAttribute('type', 'text');
    }
  };
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
var aboutPage = document.querySelector('.about-page');

if (aboutPage) {
  var historyItems = aboutPage.querySelectorAll('.histories__item'),
      viewAllBtn = aboutPage.querySelector('.our-history__view-all-btn'),
      body = document.querySelector('body'); //* histories start
  // show row of histories

  historyItems.forEach(function (item) {
    item.addEventListener('click', function () {
      var row = item.dataset.row;
      historyItems.forEach(function (history) {
        if (history.dataset.row != row) {
          history.classList.remove('show');
        } else if (history.dataset.row == row && !history.classList.contains('show')) {
          history.classList.add('show');
        } else if (history.dataset.row == row && history.classList.contains('show')) {
          history.classList.remove('show');
        }
      });
    });
  });
  body.addEventListener('click', function (e) {
    if (e.target.dataset.family != 'history') {
      historyItems.forEach(function (history) {
        if (history.classList.contains('show')) {
          history.classList.remove('show');
        }
      });
    }
  }); // show all histories

  viewAllBtn.onclick = function () {
    viewAllBtn.classList.toggle('show');
    historyItems.forEach(function (item, index) {
      if (index > 8) {
        item.classList.toggle('hidden');
      }
    });
  };

  body.addEventListener('click', function (e) {
    if (e.target.dataset.family != 'history') {
      historyItems.forEach(function (item, index) {
        if (index > 8) {
          item.classList.add('hidden');
          viewAllBtn.classList.remove('show');
        }
      });
    }
  }); //* histories start
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
  }); //* company in numbers end

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
  });
}
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
var productsPage = document.querySelector('[data-id="products-page"]');

if (productsPage) {
  var search = function search(page, keyword, filter, category) {
    $.ajax({
      type: 'POST',
      url: "/products/search",
      data: {
        page: page,
        keyword: keyword,
        filter: filter,
        category: category
      },
      success: function success(productsList) {
        productsSection.innerHTML = productsList;
      }
    });
  }; //! product-search section start */
  //* search start


  var page = 1,
      keyword = '',
      filter = 'all',
      category = productsPage.querySelector('[data-id="current-category"]').value;

  if (category == 'null') {
    category = null;
  }

  var productSearchSection = productsPage.querySelector('[data-id="product-search"]'),
      prodCategoriesWrap = productSearchSection.querySelector('[data-id="products-categories"]'),
      categoryLinks = productSearchSection.querySelectorAll('[data-name="category-link"]'),
      searchSubmitBtn = productSearchSection.querySelector('[data-id="search-submit-btn"]'),
      searchInput = productSearchSection.querySelector('[data-id="search-input"]'),
      productsSection = productsPage.querySelector('[data-id="products-section"]'),
      filterWrap = productSearchSection.querySelector('[data-id="product-filter"]'),
      filterLinks = filterWrap.querySelectorAll('[data-action="filter"]'),
      body = document.querySelector('body');
  searchSubmitBtn.addEventListener('click', function (e) {
    e.preventDefault();
  });

  searchInput.onkeyup = function (e) {
    e.preventDefault();
    page = 1;
    keyword = searchInput.value;
    filter = 'all';
    category = null;
    filterWrap.classList.remove('with-recipe');
    filterWrap.classList.remove('without-recipe');
    filterLinks.forEach(function (link, index) {
      if (index == 0) {
        link.classList.add('current');
      } else {
        link.classList.remove('current');
      }
    });
    categoryLinks.forEach(function (link) {
      link.classList.remove('current');
    });
    search(page, keyword, filter, category);
  }; //* search end
  //* filter start


  filterWrap.addEventListener('click', function (e) {
    filterLinks.forEach(function (link) {
      link.classList.remove('current');
    });
    e.target.classList.add('current');
    var productFilter = e.target.dataset.filter;

    switch (productFilter) {
      case 'with-recipe':
        filterWrap.classList.remove('without-recipe');
        filterWrap.classList.add('with-recipe');
        filter = 'with-recipe';
        break;

      case 'without-recipe':
        filterWrap.classList.remove('with-recipe');
        filterWrap.classList.add('without-recipe');
        filter = 'without-recipe';
        break;

      default:
        filterWrap.classList.remove('with-recipe');
        filterWrap.classList.remove('without-recipe');
        filter = 'all';
        break;
    }

    page = 1;
    search(page, keyword, filter, category);
  }); //* filter end
  //* categories start

  body.addEventListener('click', function (e) {
    if (e.target.dataset.action == 'categories-btn') {
      prodCategoriesWrap.classList.toggle('hidden');
    } else if (e.target.dataset.type == 'category') {
      e.preventDefault();

      if (category == e.target.dataset.category) {
        category = null;
        ;
      } else {
        category = e.target.dataset.category;
      }

      page = 1;
      categoryLinks.forEach(function (link) {
        if (link.dataset.category == category) {
          link.classList.add('current');
        } else {
          link.classList.remove('current');
        }
      });
      search(page, keyword, filter, category);
      var scrollToEl = productSearchSection.querySelector('#products');
      scrollToEl.scrollIntoView();
    } else if (e.target.dataset.action != 'filter' && e.target.className != 'page-link' && e.target.dataset.type != 'footer-category' && e.target.dataset.type != 'product-card') {
      prodCategoriesWrap.classList.add('hidden');
      category = null;
      categoryLinks.forEach(function (link) {
        link.classList.remove('current');
      });
      searchInput.value = '';
      keyword = '';
      search(page, keyword, filter, category);
    }
  }); //* categories end
  //! product-search section start */
  //! all-products section start */
  //* pagination start

  productsSection.addEventListener('click', function (e) {
    if (e.target.className == 'page-link') {
      e.preventDefault();
      page = e.target.href.split('page=')[1];
      search(page, keyword, filter, category);
    }
  }); //* pagination end
  //! all-products section end */
}
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*********************************************!*\
  !*** ./resources/js/pages/products/read.js ***!
  \*********************************************/
var productPage = document.querySelector('[data-id="products-read-page"]');

if (productPage) {
  var search = function search(page, keyword, filter, category) {
    $.ajax({
      type: 'POST',
      url: "/products/search",
      data: {
        page: page,
        keyword: keyword,
        filter: filter,
        category: category
      },
      success: function success(productsList) {
        productsSection.innerHTML = productsList;
        productsSection.style.marginTop = '80px';
      }
    });
  }; //! product-search section start */
  //* search start


  var infoSection = productPage.querySelector('[data-id="product-info"]'),
      dropdownItems = infoSection.querySelectorAll('[data-type="dropdown-item"]'); //! product-info section

  dropdownItems.forEach(function (item) {
    item.addEventListener('click', function (e) {
      if (e.target.dataset.type == 'dropdown-btn') {
        if (item.classList.contains('show')) {
          item.classList.remove('show');
          dropdownItems.forEach(function (el) {
            el.classList.remove('hidden');
          });
        } else {
          dropdownItems.forEach(function (el) {
            el.classList.remove('show');
            el.classList.add('hidden');
          });
          item.classList.remove('hidden');
          item.classList.add('show');
        }
      }
    });
  });
  var page = 1,
      keyword = '',
      filter = 'all',
      category = productPage.querySelector('[data-id="current-category"]').value;

  if (category == 'null') {
    category = null;
  }

  var productSearchSection = productPage.querySelector('[data-id="product-search"]'),
      prodCategoriesWrap = productSearchSection.querySelector('[data-id="products-categories"]'),
      categoryLinks = productSearchSection.querySelectorAll('[data-name="category-link"]'),
      searchSubmitBtn = productSearchSection.querySelector('[data-id="search-submit-btn"]'),
      searchInput = productSearchSection.querySelector('[data-id="search-input"]'),
      productsSection = productPage.querySelector('[data-id="products-section"]'),
      filterWrap = productSearchSection.querySelector('[data-id="product-filter"]'),
      filterLinks = filterWrap.querySelectorAll('[data-action="filter"]'),
      body = document.querySelector('body');
  searchSubmitBtn.addEventListener('click', function (e) {
    e.preventDefault();
  });

  searchInput.onkeyup = function (e) {
    e.preventDefault();
    page = 1;
    keyword = searchInput.value;
    filter = 'all';
    category = null;
    filterWrap.classList.remove('with-recipe');
    filterWrap.classList.remove('without-recipe');
    filterLinks.forEach(function (link, index) {
      if (index == 0) {
        link.classList.add('current');
      } else {
        link.classList.remove('current');
      }
    });
    categoryLinks.forEach(function (link) {
      link.classList.remove('current');
    });
    search(page, keyword, filter, category);
  }; //* search end
  //* filter start


  filterWrap.addEventListener('click', function (e) {
    filterLinks.forEach(function (link) {
      link.classList.remove('current');
    });
    e.target.classList.add('current');
    var productFilter = e.target.dataset.filter;

    switch (productFilter) {
      case 'with-recipe':
        filterWrap.classList.remove('without-recipe');
        filterWrap.classList.add('with-recipe');
        filter = 'with-recipe';
        break;

      case 'without-recipe':
        filterWrap.classList.remove('with-recipe');
        filterWrap.classList.add('without-recipe');
        filter = 'without-recipe';
        break;

      default:
        filterWrap.classList.remove('with-recipe');
        filterWrap.classList.remove('without-recipe');
        filter = 'all';
        break;
    }

    page = 1;
    search(page, keyword, filter, category);
  }); //* filter end
  //* categories start

  body.addEventListener('click', function (e) {
    if (e.target.dataset.action == 'categories-btn') {
      prodCategoriesWrap.classList.toggle('hidden');
    } else if (e.target.dataset.type == 'category') {
      e.preventDefault();

      if (category == e.target.dataset.category) {
        category = null;
        ;
      } else {
        category = e.target.dataset.category;
      }

      page = 1;
      categoryLinks.forEach(function (link) {
        if (link.dataset.category == category) {
          link.classList.add('current');
        } else {
          link.classList.remove('current');
        }
      });
      search(page, keyword, filter, category);
      var scrollToEl = productSearchSection.querySelector('#products');
      scrollToEl.scrollIntoView();
    } else if (e.target.dataset.action != 'filter' && e.target.className != 'page-link' && e.target.dataset.type != 'footer-category' && e.target.dataset.type != 'product-card') {
      prodCategoriesWrap.classList.add('hidden');
      category = null;
      categoryLinks.forEach(function (link) {
        link.classList.remove('current');
      });
      productsSection.innerHTML = '';
      filterWrap.classList.remove('with-recipe');
      filterWrap.classList.remove('without-recipe');
      filterLinks.forEach(function (link, index) {
        if (index == 0) {
          link.classList.add('current');
        } else {
          link.classList.remove('current');
        }
      });
      searchInput.value = '';
      keyword = '';
    }

    if (e.target.dataset.type != 'dropdown-btn') {
      dropdownItems.forEach(function (item) {
        item.classList.remove('hidden');
        item.classList.remove('show');
      });
    }
  }); //* categories end
  //! product-search section start */
  //! all-products section start */
  //* pagination start

  productsSection.addEventListener('click', function (e) {
    if (e.target.className == 'page-link') {
      e.preventDefault();
      page = e.target.href.split('page=')[1];
      search(page, keyword, filter, category);
    }
  }); //* pagination end
  //! all-products section end */
  //! similar-products section start

  $('.products-carousel').owlCarousel({
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
  }); //! similar-products section end
}
})();

/******/ })()
;