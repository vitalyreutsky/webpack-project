<?php $titile = get_field('titile');
$description = get_field('description');
$button_titile = get_field('button_titile');
$button_subtext = get_field('button_subtext');
$background_color_right_block = get_field('background_color_right_block');
$select_bonuses = get_field('select_bonuses');
$preloader_image = get_field('preloader_image');
?>

<section class="free-spins" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="free-spins__wrapper">
            <div class="free-spins__left">
                <?php if ($titile) : ?>
                    <h2 class="free-spins__title"><?php echo $titile; ?></h2>
                <?php endif; ?>
                <?php if ($description) : ?>
                    <p class="free-spins__desc"><?php echo $description; ?></p>
                <?php endif; ?>
                <div class="free-spins__btn-wrapper">
                    <?php if ($button_titile) : ?>
                        <button class="free-spins__btn btn"><?php echo $button_titile; ?></button>
                    <?php endif; ?>
                    <?php if ($button_subtext) : ?>
                        <p class="free-spins__subbutton"><?php echo $button_subtext; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div>
                <div class="arm">
                    <svg class="arm__circle" width="60" height="60" viewBox="0 0 60 60" fill="none">
                        <circle cx="30" cy="30" r="30" fill="#B05151"/>
                    </svg>
                    <svg class="arm__circle_up" width="25" height="25" viewBox="0 0 25 25" fill="none">
                        <circle cx="12.5" cy="12.5" r="12.5" fill="#D37171"/>
                    </svg>
                    <svg class="arm__shadow" width="22" height="51" viewBox="0 0 22 51" fill="none">
                        <path d="M0 0H22V45.2683V45.2683C16.202 51.9791 5.79805 51.9791 0 45.2683V45.2683V0Z" fill="#D2C970"/>
                    </svg>
                    <svg class="arm__hand" width="18" height="210" viewBox="0 0 18 210" fill="none">
                        <path d="M0 0H18V207.042V207.042C12.3969 210.129 5.60309 210.129 0 207.042V207.042V0Z" fill="#FEF5A6"/>
                    </svg>
                    <div class="arm__shadow_down">

                    </div>
                    <svg class="arm__stand_up" width="73" height="29" viewBox="0 0 73 29" fill="none">
                        <g clip-path="url(#clip0_1275_4179)">
                            <path d="M0 13C0 5.8203 5.8203 0 13 0H73V57H13C5.8203 57 0 51.1797 0 44V13Z" fill="#F2E56A"/>
                            <path opacity="0.5" d="M4 14C4 8.47715 8.47715 4 14 4H73V14H4Z" fill="#FBF2A0"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_1275_4179">
                                <rect width="73" height="29" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <svg class="arm__stand_down" width="73" height="28" viewBox="0 0 73 28" fill="none">
                        <g clip-path="url(#clip0_1275_4171)">
                            <path d="M0 -16C0 -23.1797 5.8203 -29 13 -29H73V28H13C5.8203 28 0 22.1797 0 15V-16Z" fill="#F2E56A"/>
                            <path d="M4 14C4 19.5228 8.47715 24 14 24H73V14H4Z" fill="#D9CD61"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_1275_4171">
                                <rect width="73" height="28" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <div class="arm__bottom"></div>
                </div>

                <div class="free-spins__right" style="background: <?php echo $background_color_right_block;?>;">
                    <div class="free-spins__lamps">
                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>
                    </div>
                    <div class="free-spins__cards">
                        <?php foreach ($select_bonuses as $ind => $bonus) :
                            if ($ind <=2) : ?>
                                <div class="card__wrapper">
                                    <div class="card__elem" style="background-image: url('<?php echo wp_get_attachment_url($preloader_image); ?>')">
                                        <?php get_template_part('templates/cards/vertical-bonus-card', null, array('bonus_id' => $bonus)); ?>
                                    </div>
                                </div>
                            <?php endif; endforeach; ?>
                    </div>
                    <div class="free-spins__lamps">
                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>

                        <div class="lamp"></div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>