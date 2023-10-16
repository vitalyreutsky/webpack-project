window.addEventListener("load", function(event) {
    if (document.body.classList.contains('single-bonuses')) {
        let href = document.querySelector('.bonus-page__container').getAttribute("data-external_link");
        document.querySelector('.bonus-page__loader').classList.add('animate')
        setTimeout(() => {
            document.querySelector('.bonus-page__loader').classList.add('sending')
            if (href) {
                window.location.href = href;
            }
        }, 4000)
    }
})