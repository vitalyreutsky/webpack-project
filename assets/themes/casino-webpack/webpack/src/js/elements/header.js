const link_casino = document.querySelector('.header__nav a[href="#open-casino"]');
const link_slots = document.querySelector('.header__nav a[href="#open-slots"]');
const header_links = document.querySelectorAll('.header__nav a');
const header_subnavs = document.querySelectorAll('.header__subnav');
const header_burger = document.querySelector('.header__burger');
const menu_mobile = document.querySelector('.menu-mobile');
const menu_mobile_close = document.querySelector('.menu-mobile__close');

window.addEventListener("load", function(event) {
    let x;
    addEventListener('touchstart', e => x = e.changedTouches[0].clientX);
    addEventListener('touchend', e => e.changedTouches[0].clientX - x > 10 && swipeLeft());

    function swipeLeft() {
        if (menu_mobile.classList.contains('open')) {
            menu_mobile.classList.remove('open')
            document.querySelector('body').style.overflow = '';
        }
    }

    if (menu_mobile_close) {
        menu_mobile_close.addEventListener('click', (e) => {
            menu_mobile.classList.remove('open')
            document.querySelector('body').style.overflow = '';
        })
    }

    if (link_casino) {
        link_casino.addEventListener('click', (e) => {
            e.preventDefault();
            let href = $('.menu-casino-menu-container .menu-item').first().find('a').attr('href');
            window.location = href;
        })
    }

    if (link_slots) {
        link_slots.addEventListener('click', (e) => {
            e.preventDefault();
            let href = $('.menu-slots-menu-container .menu-item').first().find('a').attr('href');
            window.location = href;
        })
    }

    function removeActiveLink() {
        if (header_links) {
            header_links.forEach((header_link) => {
                header_link.classList.remove('active');
            })
        }
        if (header_subnavs) {
            header_subnavs.forEach((header_subnav) => {
                header_subnav.classList.remove('active');
            })
        }
    }

    document.addEventListener('click', (ev) => {
        if (menu_mobile) {
            if (menu_mobile.classList.contains('open')) {
                if (!ev.target.closest('.menu-mobile__wrapper')) {
                    menu_mobile.classList.remove('open');
                    document.querySelector('body').style.overflow = '';
                }
            } else {
                if (ev.target.closest('.header__burger')) {
                    menu_mobile.classList.add('open')
                    document.querySelector('body').style.overflow = 'hidden';
                }
            }
        }
    })
})
