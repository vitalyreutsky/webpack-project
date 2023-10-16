<?php $map_svg_regions = get_field('map_svg_regions');
$title = get_field('title');
$regions = get_field('regions');
$bottom_text_block = get_field('bottom_text_block'); ?>

<section class="regions" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="regions__wrapper wrapper-white">
            <div class="regions__content">
                <div class="regions__map">
                    <?php echo App\Base\SvgSupport::get_inline_svg_by_id($map_svg_regions); ?>
                </div>
                <div class="regions__col">
                    <?php if ($title) : ?>
                        <h2 class="regions__title"><?php echo $title;?></h2>
                    <?php endif; ?>
                    <div class="regions__cards">

                        <div class="regions__cards_col">
                            <a class="regions__card" href="<?php echo $regions['url_lombardia_card'];?>" data-map="map-lombardia">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Lombardia.png'?>" alt="icon region Lombardia">
                                <p class="regions__name">Lombardia</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_lacio_card'];?>" data-map="map-lacio">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Lacio.png'?>" alt="icon region Lacio">
                                <p class="regions__name">Lacio</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_campania_card'];?>" data-map="map-campania">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Campania.png'?>" alt="icon region Campania">
                                <p class="regions__name">Campania</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_veneto_card'];?>" data-map="map-veneto">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Veneto.png'?>" alt="icon region Veneto">
                                <p class="regions__name">Veneto</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_sicilia_card'];?>" data-map="map-sicilia">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Sicilia.png'?>" alt="icon region Sicilia">
                                <p class="regions__name">Sicilia</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_sicilia_card'];?>" data-map="map-emilia-romagna">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Emilia-Romagna.png'?>" alt="icon region Emilia-Romagna">
                                <p class="regions__name">Emilia-Romagna</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_molise_card'];?>" data-map="map-molise">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Molise.png'?>" alt="icon region Molise">
                                <p class="regions__name">Molise</p>
                            </a>
                        </div>

                        <div class="regions__cards_col">
                            <a class="regions__card" href="<?php echo $regions['url_piemonte_card'];?>" data-map="map-piemonte">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Piemonte.png'?>" alt="icon region Piemonte">
                                <p class="regions__name">Piemonte</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_puglia_card'];?>" data-map="map-puglia">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Puglia.png'?>" alt="icon region Puglia">
                                <p class="regions__name">Puglia</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_toscana_card'];?>" data-map="map-toscana">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Toscana.png'?>" alt="icon region Toscana">
                                <p class="regions__name">Toscana</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_calabria_card'];?>" data-map="map-calabria">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Calabria.png'?>" alt="icon region Calabria">
                                <p class="regions__name">Calabria</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_sardegna_card'];?>" data-map="map-sardegna">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Sardegna.png'?>" alt="icon region Sardegna">
                                <p class="regions__name">Sardegna</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_liguria_card'];?>" data-map="map-liguria">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Liguria.png'?>" alt="icon region Liguria">
                                <p class="regions__name">Liguria</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_valle_daosta_card'];?>" data-map="map-valle-d-aosta">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Valle dAosta.png'?>" alt="icon region Valle d'Aosta">
                                <p class="regions__name">Valle d'Aosta</p>
                            </a>
                        </div>

                        <div class="regions__cards_col">
                            <a class="regions__card" href="<?php echo $regions['url_marche_card'];?>" data-map="map-marche">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Marche.png'?>" alt="icon region Marche">
                                <p class="regions__name">Marche</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_abruzzo_card'];?>" data-map="map-abruzzo">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Abruzzo.png'?>" alt="icon region Abruzzo">
                                <p class="regions__name">Abruzzo</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_friuli-venezia_giulia_card'];?>" data-map="map-friuli-venezia">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Friuli-Venezia Giulia.png'?>" alt="icon region Friuli-Venezia Giulia">
                                <p class="regions__name">Friuli-Venezia Giulia</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_trentino-alto_adige_card'];?>" data-map="map-trentino">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Trentino-Alto Adige.png'?>" alt="icon region Trentino-Alto Adige">
                                <p class="regions__name">Trentino-Alto Adige</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_umbria_card'];?>" data-map="map-umbria">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Umbria.png'?>" alt="icon region Umbria">
                                <p class="regions__name">Umbria</p>
                            </a>

                            <a class="regions__card" href="<?php echo $regions['url_basilicata_card'];?>" data-map="map-basilicata">
                                <img class="regions__icon" src="<?php echo get_template_directory_uri() . '/assets/img/regions/Basilicata.png'?>" alt="icon region Basilicata">
                                <p class="regions__name">Basilicata</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <?php if ($bottom_text_block) : ?>
                <div class="regions__text"><?php echo $bottom_text_block; ?></div>
            <?php endif ?>
        </div>
    </div>
</section>
