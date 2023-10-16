<?php $position_jackpot_background = get_field('position_jackpot_background');
$color_background = get_field('color_background');
$slots_list = get_field('slots_list');
$title = get_field('title');
$text_content = get_field('text_content');
$jackpot_card = get_field('jackpot_card');
$top_text = $jackpot_card['top_text'];
$jackpot_value = $jackpot_card['jackpot_value'];
$bottom_text = $jackpot_card['bottom_text']; ?>

<section class="jackpot-background position-<?php echo $position_jackpot_background;?> color-<?php echo $color_background; ?>">
    <div class="wrapper">
        <div class="jackpot-background__wrapper wrapper-white">
            <div class="jackpot-background__background">
                <div class="jackpot-background__slots">
                    <?php foreach ($slots_list as $ind => $slot) {
                        if ($position_jackpot_background == 'top' || $position_jackpot_background == 'bottom') {
                            if ($ind < 4) {
                                get_template_part('templates/cards/background-slot', null, array('slot_id' => $slot));
                            }
                        } else {
                            get_template_part('templates/cards/background-slot', null, array('slot_id' => $slot));
                        }
                    } ?>
                </div>
                <div class="jackpot-background__card">
                    <p class="background-card__top"><?php echo $top_text; ?></p>
                    <p class="background-card__value"><?php echo $jackpot_value; ?></p>
                    <p class="background-card__bottom"><?php echo $bottom_text; ?></p>
                </div>
            </div>
            <div class="jackpot-background__content">
                <?php if ($title) : ?>
                    <h2 class="jackpot-background__title heading-italy"><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if ($text_content) : ?>
                    <div class="jackpot-background__text"><?php echo $text_content; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>