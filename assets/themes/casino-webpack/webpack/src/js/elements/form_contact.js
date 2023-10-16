$(document).ready( function () {
    let form = $('.form');
    let inputs = form.find('.form-item input:not([type="submit"]), .form-item textarea');

    $(document).on('click', '.form__wrapper .field-button .btn',  function (e) {
        e.preventDefault();
        let arr = [];
        inputs.each(function () {
            validateForm($(this), $(this).parents('.form-item'));
            let ind = $(this).attr('data-placeholder');
            arr.push({[ind]: $(this).val()});
        });

        grecaptcha.ready(function() {
            grecaptcha.execute(consts.recapthca_client_key, {action: 'add_comment'}).then(function(token) {

                if (!$('.form__wrapper .form-item.has-error').length) {
                    $.ajax({
                        url: '/wp-admin/admin-ajax.php',
                        type: 'POST',
                        data: {
                            'action': 'send_feedback',
                            'fields': arr,
                            'token': token
                        },
                        beforeSend: function (xhr) {
                            form.find('.field-button .spinner-wrapper').addClass('animation-sending');
                            form.css({
                                'pointer-events': 'none',
                                'opacity': '.8',
                            })
                        },
                        success: function (data) {
                            form.css({
                                'pointer-events': 'auto',
                                'opacity': '1',
                            })
                            form.find('.field-button .spinner-wrapper').removeClass('animation-sending');
                            let error_mess = form.find('.form__error');
                            if (data.result) {
                                $('.form__body').addClass('success')
                            } else {
                                error_mess.addClass('show');
                                error_mess.text(data.message);
                                form.find('input:not([type="submit"]), textarea').val('');
                            }
                        }
                    })
                }
            });
        });
    })

    inputs.click(function () {
        $(this).addClass('label-up');
    });

    inputs.on('change focus', function () {
        $(this).addClass('label-up');
    });

    inputs.on('blur', function () {
        $(this).addClass('label-up');
        validateForm($(this), $(this).parents('.form-item'));
    });

    inputs.on('change', function () {
        validateForm($(this), $(this).parents('.form-item'));
    })

    $(document).on('input', '.form__wrapper .form-item input, .form__wrapper .form-item textarea', function (e) {
        let error_mess = form.find('.form__error');
        error_mess.removeClass('show');
        if ($(this).val().length > 0) {
            $(this).parents('.form-item').addClass('has-success')
            $(this).addClass('label-up')
        } else {
            $(this).parents('.form-item').removeClass('has-success')
            $(this).removeClass('label-up')
        }
    })

    $(document).on('click', '.success-message__btn', function (e) {
        e.preventDefault();
        $('.form__body').removeClass('success')
        form.find('input:not([type="submit"]), textarea').val('');
    })

    function validateForm($this, $wrap) {
        let $name = $this.attr('name')

        switch ($name) {
            case 'Text':
                validateText($this, $wrap);
                break;
            case 'emailAddress':
                validateEmail($this, $wrap);
                break;
            case 'Message':
                validateText($this, $wrap);
                break;
        }
    }

    function validateText($this, $wrap) {
        if ($this.val().length > 0) {
            $wrap.addClass('has-success').removeClass('has-error')
            $this.addClass('label-up')
        } else {
            $wrap.addClass('has-error').removeClass('has-success');
            $wrap.find('.error-message').text('Questo campo è obbligatorio')
            $this.addClass('label-up')
        }
    }

    function validateEmail($this, $wrap) {
        let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if ($this.val().length > 0) {
            if (reg.test($this.val()) === false) {
                $wrap.addClass('has-error').removeClass('has-success');
                $this.addClass('label-up')
                $wrap.find('.error-message').text('Un indirizzo e-mail deve essere valido')
            } else {
                $wrap.addClass('has-success').removeClass('has-error')
                $this.addClass('label-up')
            }
        } else {
            $this.addClass('label-up')
            $wrap.addClass('has-error').removeClass('has-success');
            $wrap.find('.error-message').text('Questo campo è obbligatorio')
        }
    }
})

