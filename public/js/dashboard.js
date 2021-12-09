/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!******************************************!*\
  !*** ./resources/js/dashboard/master.js ***!
  \******************************************/
//! Ajax request setup 
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
var html = document.querySelector('html'),
    modals = html.querySelectorAll('.modal'); //! hide modals start

html.addEventListener('click', function (e) {
  modals.forEach(function (modal) {
    modal.classList.add('hidden');
  });
}); //! hide modals end
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!***********************************************!*\
  !*** ./resources/js/components/pagination.js ***!
  \***********************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!********************************************************!*\
  !*** ./resources/js/dashboard/pages/products/index.js ***!
  \********************************************************/
var productsPage = document.querySelector('.products-page');

if (productsPage) {
  var deleteBtns = productsPage.querySelectorAll('[data-action="delete-product"]'),
      confirmModal = productsPage.querySelector('.confirm-modal'),
      confirmInput = confirmModal.querySelector('[name="id"]'); //* confirm-modal start

  deleteBtns.forEach(function (button) {
    button.onclick = function () {
      confirmModal.classList.remove('hidden');
      confirmInput.value = button.dataset.product;
    };
  });
  confirmModal.addEventListener('click', function (e) {
    if (e.target.className == 'confirm-modal' || e.target.dataset.action == 'cancel') {
      confirmModal.classList.add('hidden');
      confirmInput.value = '';
    }
  }); //* confirm-modal end
}
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*********************************************************!*\
  !*** ./resources/js/dashboard/pages/products/create.js ***!
  \*********************************************************/
var productsCreate = document.querySelector('.products-create-page');

if (productsCreate) {
  var editors = document.getElementsByClassName('simditor-textarea'),
      textareas = []; //change Simditor default locale

  Simditor.locale = 'ru-RU';

  for (i = 0; i < editors.length; i++) {
    textareas[i] = new Simditor({
      textarea: editors[i],
      toolbarFloatOffset: '60px',
      upload: {//  url: '/upload/simditor_photo',   //image upload url by server
        //  params: {
        //     folder: 'news' //used in store folder path
        //  },
        //  fileKey: 'simditor_photo', //name of input
        //  connectionCount: 10,
        //  leaveConfirm: 'Пожалуйста дождитесь окончания загрузки изображений на сервер! Вы уверены что хотите закрыть страницу?'
      },
      //   defaultImage: '/img/news/simditor/default/default.png', //default image thumb while uploading
      cleanPaste: true,
      //clear all styles while copy pasting,
      imageButton: 'upload',
      toolbar: ['bold', 'underline', '|', 'ol', 'ul', '|', 'link', 'hr'],
      //image removed
      toolbarFloat: false
    });
  }
}
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*********************************************************!*\
  !*** ./resources/js/dashboard/pages/products/update.js ***!
  \*********************************************************/
var productsUpdate = document.querySelector('.products-update-page');

if (productsUpdate) {
  var editors = document.getElementsByClassName('simditor-textarea'),
      textareas = [],
      deleteBtn = productsUpdate.querySelector('[data-action="delete-product"]'),
      confirmModal = productsUpdate.querySelector('.confirm-modal'); //change Simditor default locale

  Simditor.locale = 'ru-RU';

  for (i = 0; i < editors.length; i++) {
    textareas[i] = new Simditor({
      textarea: editors[i],
      toolbarFloatOffset: '60px',
      upload: {//  url: '/upload/simditor_photo',   //image upload url by server
        //  params: {
        //     folder: 'news' //used in store folder path
        //  },
        //  fileKey: 'simditor_photo', //name of input
        //  connectionCount: 10,
        //  leaveConfirm: 'Пожалуйста дождитесь окончания загрузки изображений на сервер! Вы уверены что хотите закрыть страницу?'
      },
      //   defaultImage: '/img/news/simditor/default/default.png', //default image thumb while uploading
      cleanPaste: true,
      //clear all styles while copy pasting,
      imageButton: 'upload',
      toolbar: ['bold', 'underline', '|', 'ol', 'ul', '|', 'link', 'hr'],
      //image removed
      toolbarFloat: false
    });
  } //* confirm-modal start


  deleteBtn.onclick = function () {
    confirmModal.classList.remove('hidden');
  };

  confirmModal.addEventListener('click', function (e) {
    if (e.target.className == 'confirm-modal' || e.target.dataset.action == 'cancel') {
      confirmModal.classList.add('hidden');
    }
  }); //* confirm-modal end
}
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*************************************************************!*\
  !*** ./resources/js/dashboard/pages/products/categories.js ***!
  \*************************************************************/

})();

/******/ })()
;