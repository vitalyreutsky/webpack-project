const tooltip_icons = document.querySelectorAll('.tooltip-icon');

if (tooltip_icons) {
    tooltip_icons.forEach((tooltip_icon) => {
        tooltip_icon.addEventListener('click', (e) => {
            const tooltip_wrapp = tooltip_icon.closest('.tooltip-wrapper');

            if (tooltip_wrapp) {
                if (!tooltip_wrapp.classList.contains('active')) {
                    tooltip_wrapp.classList.add('active')

                    setTimeout(() => {
                        tooltip_wrapp.classList.remove('active')
                    }, 2000);
                }
            }
        })
    })
}