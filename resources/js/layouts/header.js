const header = document.querySelector('.header');

if (header) {
    const sitesDropdown = header.querySelector('.sites-dropdown'),
        sitesDropdownBtn = sitesDropdown.querySelector('.sites-dropdown__button'),
        searchWrap = header.querySelector('.search'),
        searchBtn = searchWrap.querySelector('.search__button'),
        langsDropdown = header.querySelector('.langs-dropdown'),
        langsDropdownBtn = langsDropdown.querySelector('.langs-dropdown__button'),
        body = document.querySelector('body');

    //* sites dropdown start
    sitesDropdownBtn.onclick = e => {
        e.preventDefault();
        sitesDropdown.classList.toggle('show');
    };
    body.addEventListener('click', e => {
        if (e.target.dataset.family != 'sites-dropdown' && sitesDropdown.classList.contains('show')) {
            sitesDropdown.classList.remove('show');
        }
    });
    //* sites dropdown end
    //* search start
    searchBtn.onclick = e => {
        e.preventDefault();
        searchWrap.classList.toggle('show');
    };
    body.addEventListener('click', e => {
        if (e.target.dataset.family != 'search' && searchWrap.classList.contains('show')) {
            searchWrap.classList.remove('show');
        }
    });
    //* search end
    //* langs dropdown start 
    langsDropdownBtn.onclick = e => {
        langsDropdown.classList.toggle('show');
    };
    body.addEventListener('click', e => {
        if (e.target.dataset.family != 'langs-dropdown' && langsDropdown.classList.contains('show')) {
            langsDropdown.classList.remove('show');
        }
    });
    //* langs dropdown end
}