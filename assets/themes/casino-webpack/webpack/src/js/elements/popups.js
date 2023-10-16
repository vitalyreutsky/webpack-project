window.addEventListener("load", function () {
    if (window.innerWidth > 768) {
        if (getCookie("exitIntentShown") !== 'true') {
            document.addEventListener("mouseout", mouseEvent);
            if ($('.modal-registr').length) {
                setTimeout(() => {
                    $('.modal-registr').addClass('show');
                }, 1000)
            }
        }
    }

    document.addEventListener('click', (ev) => {
        const popup = document.querySelector('.popup.show')

        if (popup) {
            if ( !ev.target.closest('.popup__container') ) {
                $('.popup.show .popup__close').trigger('click');
            }
        }
    })

    $(document).on('click', '.modal-registr__btn', function () {
        if (validateModal()) {
            sendMail($('#modal-registr-email').val())
        }
    })

    $('.popup__close').click(function () {
        $(this).parents('.popup').removeClass('show');
        document.querySelector('body').style.overflow = '';
        setCookie("exitIntentShown", true, {'path': '/' ,'max-age': 86400});
    });

    $('.modal-registr__close').click(function () {
        $(this).parents('.modal-registr').removeClass('show');
        setCookie("exitIntentShown", true, {'path': '/' ,'max-age': 86400});
    });
})

function validateModal() {
    let result = true;
    let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test($('#modal-registr-email').val()) === false) {
        result = false;
        $('#modal-registr-email').addClass('error');
    }

    if (!$("#register-agree").prop('checked')) {
        $('.modal-registr__checkbox').addClass('error');
    }

    return result;
}

function sendMail(email) {
    console.log(`{\"email\":\"${email}\",\"tag\":\"subscription_wcasino\"}`)
    $.ajax({
        url: 'https://api.wcasino.co.uk/InternalApi/user/register_customer',
        method: 'POST',
        data: `{\"email\":\"${email}\",\"tag\":\"subscription_wcasino\"}`,
        mode: "cors",
        beforeSend: function (xhr) {},
        success: function (data) {
            data = JSON.parse(data);
            if (data.message === "Invalid email address") {
                $('#modal-registr-email').addClass('error');
                $('.modal-registr__email_wrapper .invalid-text').addClass("active");
                $('.modal-registr__email_wrapper .invalid-text').text("Invalid email address");
            } else {
                if (data.status === 1) {
                    $('.modal-registr').addClass('success')
                } else {
                    console.log(data);
                    $('#modal-registr-email').addClass('error');
                }
            }
        }
    })
}

$(document).on('input', '.modal-registr .modal-registr__email.error', function (e) {
    $(this).removeClass('error');
    $('.modal-registr__email_wrapper .invalid-text').removeClass("active");
})

$(document).on('change', '.modal-registr .modal-registr__checkbox.error #register-agree', function (e) {
    $('.modal-registr .modal-registr__checkbox').removeClass('error');
})

const mouseEvent = (e) => {
    const shouldShowExitIntent =
        !e.toElement && !e.relatedTarget && e.clientY < 10;

    if (shouldShowExitIntent) {

        openModal();
        $('.exit-popup').parents('.popup').addClass('show');

        document.removeEventListener("mouseout", mouseEvent);
        setCookie("exitIntentShown", true, {'path': '/' ,'max-age': 86400});
    }
};

function openModal() {
    document.querySelector('body').style.overflow = 'hidden';
}

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

function setCookie(name, value, options = {}) {

    if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
    }

    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

    for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
    }

    document.cookie = updatedCookie;
}