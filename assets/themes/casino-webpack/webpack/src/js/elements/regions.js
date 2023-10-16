window.addEventListener("load", function(event) {
    const map = document.querySelector('.regions__map');
    const regions_cards = document.querySelectorAll('.regions__card');

    if (map && regions_cards) {
        const map_regions = map.querySelectorAll('.elem-region');

        if (window.innerWidth > 768) {
            regions_cards.forEach((regions_card) => {
                regions_card.addEventListener('mouseover', () => {
                    let data_map = regions_card.getAttribute('data-map');

                    let path = map.querySelector('.' + data_map);

                    path.classList.add('active')
                })

                regions_card.addEventListener('mouseout', () => {
                    let data_map = regions_card.getAttribute('data-map');

                    let path = map.querySelector('.' + data_map);

                    path.classList.remove('active')
                })
            })

            if (map_regions) {
                map_regions.forEach((map_region) => {
                    let region_name = map_region.classList[0];
                    let region_card = document.querySelector('.regions__card[data-map="' + region_name + '"]');

                    map_region.addEventListener('mouseover', () => {
                        map_region.classList.add('active');
                        region_card.classList.add('active');
                    })

                    map_region.addEventListener('mouseout', () => {
                        map_region.classList.remove('active');
                        region_card.classList.remove('active');
                    })

                    map_region.addEventListener('click', () => {
                        const href = region_card.getAttribute('href');
                        location.href=href;
                    })
                })
            }
        } else {
            regions_cards.forEach((region_card) => {
                region_card.addEventListener('click', (e) => {
                    e.preventDefault();
                    if (region_card.classList.contains('active')) {
                        location.href = region_card.getAttribute('href');
                    } else {
                        let data_map = region_card.getAttribute('data-map');
                        let path = map.querySelector('.' + data_map);
                        let active_map = map.querySelector('.active');
                        let active_card = document.querySelector('.regions__card.active');

                        if (active_map) {
                            active_map.classList.remove('active')
                            active_card.classList.remove('active')
                        }

                        path.classList.add('active')
                        region_card.classList.add('active');
                    }
                })
            })
        }
    }
})