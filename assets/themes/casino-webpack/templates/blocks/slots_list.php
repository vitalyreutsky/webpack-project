<?php $title = get_field('title');
$text_content = get_field('text_content');
$use_horizontal_or_vertical_card_slot = get_field('use_horizontal_or_vertical_card_slot');
if ($use_horizontal_or_vertical_card_slot) {
    $use_horizontal_or_vertical_card_slot = 'vertical';
} else {
    $use_horizontal_or_vertical_card_slot = 'horizontal';
}
$select_slots = get_field('select_slots'); ?>

<section class="slots-list" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="slots-list__wrapper wrapper-white">
            <?php if ($title) : ?>
                <h2 class="slots-list__title heading-italy"><?php echo $title; ?></h2>
            <?php endif; ?>

            <?php if ($text_content) : ?>
                <div class="slots-list__text"><?php echo $text_content; ?></div>
            <?php endif; ?>

            <?php if ($select_slots) : ?>
                <div class="slots-list__cards type-<?php echo $use_horizontal_or_vertical_card_slot;?>">
                    <?php foreach ($select_slots as $slot_id ) {
                        get_template_part('templates/cards/card-slot', null, array('slot_id' => $slot_id));
                    } ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
