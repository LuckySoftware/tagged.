let lastScrollTop = 0;
const header = document.getElementById('header');
const nav = document.getElementById('nav');

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        // Scroll hacia abajo
        header.classList.add('header-hidden');
        nav.classList.add('nav-bar-up');
        nav.classList.remove('nav-bar-down');
    } else {
        // Scroll hacia arriba
        header.classList.remove('header-hidden');
        nav.classList.remove('nav-bar-up');
        nav.classList.add('nav-bar-down');
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});
