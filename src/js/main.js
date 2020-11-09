//NAVIGATION
const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('.header__navigation');

hamburger.addEventListener('click', () => {
    if(nav.style.maxHeight) {
        hamburger.innerHTML = `<i class="fas fa-bars"></i>`;
        nav.style.maxHeight = null;
    }

    else {
        nav.style.maxHeight = nav.scrollHeight + 'px';
        hamburger.innerHTML = `<i class="fas fa-times"></i>`;
    }
})