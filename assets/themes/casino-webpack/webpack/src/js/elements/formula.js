$(document).ready( function () {

    $(document).on('click', '.formula__btns .formula__btn',  function (e) {
        let val = $(this).attr('data-value');
        let wrapper = $(this).parents('.formula');
        let active_value = wrapper.find('.formula__value.active');

        $(this).addClass('clicked')

        setTimeout(() => {
            $(this).removeClass('clicked')
        }, 300)

        if (val !== "C" && val !== "=") {
            if (active_value.hasClass('first_click')) {
                active_value.text(val)
                active_value.removeClass('first_click')
            } else {
                if (active_value.text() === '0') {
                    active_value.text(val)
                } else {
                    if (active_value.text().length < 9) {
                        active_value.text(active_value.text() + val)
                    }
                }
            }
        }

        if (val === "C") {
            active_value.text(' ')
        }

        if (val === "=") {
            wrapper.find('.formula__result_value').text(Math.round10(wrapper.find('.first_value').text() / wrapper.find('.second_value').text(), -2))
        }
    })

    $(document).on('click', '.formula__value:not(.active)',  function (e) {
        let wrapper = $(this).parents('.formula');
        wrapper.find('.formula__value.active').removeClass('active');
        $(this).addClass('active');
    })

    Math.round10 = function (value, exp) {
        return decimalAdjust("round", value, exp);
    };

    function decimalAdjust(type, value, exp) {

        if (typeof exp === "undefined" || +exp === 0) {
            return Math[type](value);
        }
        value = +value;
        exp = +exp;

        if (isNaN(value) || !(typeof exp === "number" && exp % 1 === 0)) {
            return NaN;
        }

        value = value.toString().split("e");
        value = Math[type](+(value[0] + "e" + (value[1] ? +value[1] - exp : -exp)));

        value = value.toString().split("e");
        return +(value[0] + "e" + (value[1] ? +value[1] + exp : exp));
    }

})