<?php $title = get_field('title');
$select_main_slot = get_field('select_main_slot');
$select_another_slots = get_field('select_another_slots');
$big_or_regular_main_card = get_field('big_or_regular_main_card');
if ($big_or_regular_main_card) {
    $big_or_regular_main_card = 'regular';
} else {
    $big_or_regular_main_card = 'big';
} ?>

<section class="jackpot-slots" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="jackpot-slots__wrapper wrapper-white">
            <?php if ($title) : ?>
                <div class="jackpot-slots__top">
                    <h5 class="jackpot-slots__title"><?php echo $title; ?></h5>
                </div>
            <?php endif; ?>
            <div class="jackpot-slots__cards type-<?php echo $big_or_regular_main_card; ?>">
                <?php if ($big_or_regular_main_card == 'regular') {
                    get_template_part('templates/cards/jackpot-slot', null, array('slot_id' => $select_another_slots[0], 'main' => false));
                    get_template_part('templates/cards/jackpot-slot', null, array('slot_id' => $select_main_slot, 'main' => true));
                    get_template_part('templates/cards/jackpot-slot', null, array('slot_id' => $select_another_slots[1], 'main' => false));
                } else {
                    ?>
                    <div class="jackpot-slots__card_main">
                        <?php get_template_part('templates/cards/jackpot-slot', null, array('slot_id' => $select_main_slot, 'main' => true)); ?>
                    </div>
                    <div class="jackpot-slots__card_another">
                        <?php
                        get_template_part('templates/cards/jackpot-slot', null, array('slot_id' => $select_another_slots[0], 'main' => false));
                        get_template_part('templates/cards/jackpot-slot', null, array('slot_id' => $select_another_slots[1], 'main' => false));
                        ?>
                    </div>
                    <?php
                } ?>
            </div>
        </div>
    </div>
</section>
