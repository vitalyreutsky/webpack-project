$(document).ready(function () {
    $(document).on('click', '.bonuses-list__filter-elem[data-type="type"]', function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active')
        } else {
            $('.bonuses-list__filter-elem.active[data-type="type"]').removeClass('active');
            $(this).addClass('active')
        }

        applyFilters();
    });

    const rating_select = document.querySelector('.bonuses-list__filter-elem.rating .custom-select__options');
    const tags_select = document.querySelector('.bonuses-list__filter-elem.tags .custom-select__options');

    document.addEventListener('click', (ev) => {
        if (rating_select) {
            if (rating_select.classList.contains('show')) {
                rating_select.classList.remove('show');
                $('.bonuses-list__filter-elem.rating').removeClass('show')
            } else {
                if (ev.target.closest('.bonuses-list__filter-elem[data-type="rating"]')) {
                    rating_select.classList.toggle('show');
                    $('.bonuses-list__filter-elem.rating').toggleClass('show')
                }
            }
        }

        if (tags_select) {
            if (tags_select.classList.contains('show')) {
                tags_select.classList.remove('show');
                $('.bonuses-list__filter-elem.tags').removeClass('show')
            } else {
                if (ev.target.closest('.bonuses-list__filter-elem[data-type="tags"]')) {
                    tags_select.classList.toggle('show');
                    $('.bonuses-list__filter-elem.tags').toggleClass('show')
                }
            }
        }
    })

    $(document).on('click', '.bonuses-list__filter-elem[data-type="rating"] .custom-select__elem:not(.active)', function () {
        $('.bonuses-list__filter-elem[data-type="rating"] .custom-select__elem.active').removeClass('active');
        $(this).addClass('active');

        let value = $(this).attr('data-value');
        let title = $('.bonuses-list__filter-elem[data-type="rating"] .custom-select__title');
        if (value === 'null') {
            title.text('Rating')
        } else {
            if (value === '5') {
                title.text('Rating: 5')
            } else {
                title.text('Rating: ' + value + '+')
            }
        }

        $('.bonuses-list__filter-elem[data-type="rating"]').attr('data-value', value)

        applyFilters();
    });

    $(document).on('click', '.bonuses-list__filter-elem[data-type="tags"] .custom-select__elem:not(.active)', function () {
        $('.bonuses-list__filter-elem[data-type="tags"] .custom-select__elem.active').removeClass('active');
        $(this).addClass('active');

        let value = $(this).attr('data-value');
        let title = $('.bonuses-list__filter-elem[data-type="tags"] .custom-select__title');
        if (value === 'null') {
            title.text(title.attr('data-placeholder'))
        } else {
            title.text($(this).find('.custom-select__elem_name').text())
        }

        $('.bonuses-list__filter-elem[data-type="tags"]').attr('data-value', value)

        applyFilters();
    });
})


function applyFilters()
{
    let wrapp = $('.bonuses-list__filters').parents('.bonuses-list ').find('.bonuses-list__wrapper');
    let wrapp_filter = $('.bonuses-list__filters');
    let rating = null;
    let tags = null;
    if ($('.bonuses-list__filter-elem.rating').length) {
        rating = $('.bonuses-list__filter-elem.rating').attr('data-value');
    }
    if ($('.bonuses-list__filter-elem.tags').length) {
        tags = $('.bonuses-list__filter-elem.tags').attr('data-value');
    }

    $.ajax({
        url: '/wp-admin/admin-ajax.php',
        type: 'POST',
        data: {
            'action': 'filter_bonuses',
            'type': $('.bonuses-list__filter-elem.active[data-type="type"]').attr('data-value'),
            'rating': rating,
            'tags': tags,
            'standart_ids': $('.bonuses-list__wrapper').attr('data-ids')
        },
        beforeSend: function (xhr) {
            wrapp_filter.css('pointer-events', 'none');
            wrapp_filter.css('opacity', '.3');
            wrapp.css('pointer-events', 'none');
            wrapp.css('opacity', '.3');
        },
        success: function (data) {
            console.log('data = ',data)
            wrapp_filter.css('pointer-events', 'all');
            wrapp_filter.css('opacity', '1');
            wrapp.css('pointer-events', 'all');
            wrapp.css('opacity', '1');
            wrapp.html(data.bonuses);
        }
    });
}