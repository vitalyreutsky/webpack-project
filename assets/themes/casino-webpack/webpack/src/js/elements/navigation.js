$(document).ready(function () {

    const navigation_cards = document.querySelectorAll('.navigation__card');

    navigation_cards.forEach((card) => {
        card.addEventListener('click', (e) => {
            e.preventDefault();

            let href = card.getAttribute('href');
            const elem = document.querySelector(href);
            if (elem) {
                const y = elem.getBoundingClientRect().top + window.pageYOffset - 130;

                setTimeout(() => {
                    window.scrollTo({
                        top: y,
                        behavior: "smooth"
                    });
                }, 200)
            }
        })
    })

    const custom_select = document.querySelector('.navigation__wrapper.custom-select__options');

    document.addEventListener('click', (ev) => {
        if (custom_select) {
            if (custom_select.classList.contains('show')) {
                custom_select.classList.remove('show');
                $('.navigation--selected').removeClass('show')
            } else {
                if (ev.target.closest('.navigation--selected')) {
                    custom_select.classList.toggle('show');
                    $('.navigation--selected').toggleClass('show')
                }
            }
        }
    })
})