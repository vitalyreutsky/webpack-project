$(document).ready(function () {
    const arm = document.querySelector('.free-spins .arm');
    const wrapper = document.querySelector('section.free-spins');
    const btn = document.querySelector('.free-spins__btn')

    if (arm) {
        arm.addEventListener('click', (e) => {
            start_free_slots()
        })

        btn.addEventListener('click', (e) => {
            start_free_slots()
        })

        function start_free_slots() {
            wrapper.classList.add('animation');

            setTimeout(() => {
                wrapper.classList.remove('animation');
            }, 4500)

            setTimeout(() => {
                $.ajax({
                    url: '/wp-admin/admin-ajax.php',
                    type: 'POST',
                    data: {
                        'action': 'get_random_bonuses',
                    },
                    beforeSend: function (xhr) {
                        $('.free-spins .card__elem').html('');
                        $('.free-spins .card__elem').addClass('loading');
                    },
                    success: function (data) {
                        console.log('data = ',data)
                        if (data.bonuses) {
                            $('.free-spins .card__elem').each((index, element) => {
                                let elem = $('.free-spins .card__elem')[index];
                                elem.innerHTML = data.bonuses[index];
                                elem.classList.remove('loading')
                            })
                        }
                    }
                });
            }, 750)
        }
    }
})
