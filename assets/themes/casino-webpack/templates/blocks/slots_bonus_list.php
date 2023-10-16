<?php $list = get_field('list');
$use_for_new_slot = get_field('use_for_new_slot');
$first_card_option = get_field('first_card_option'); ?>

<section class="slot-bonus" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="slot-bonus__wrapper">
            <?php foreach ($list as $ind => $elem) {
                $select_slot = $elem['select_slot'];
                $select_bonus = $elem['select_bonus'];
                $text = $elem['text'];
                if ($use_for_new_slot) {
                    $title = $first_card_option['title'];
                    $background_image = $first_card_option['background_image'];

                    if ($ind === 0) {
                        get_template_part('templates/cards/first-new-slot-card', null, array('slot_id' => $select_slot, 'bonus_id' => $select_bonus, 'text' => $text, 'title' => $title, 'background_image' => $background_image));
                    } else {
                        get_template_part('templates/cards/slot-bonus-card', null, array('slot_id' => $select_slot, 'bonus_id' => $select_bonus, 'text' => $text, 'ind' => $ind ));
                    }
                } else {
                    get_template_part('templates/cards/slot-bonus-card', null, array('slot_id' => $select_slot, 'bonus_id' => $select_bonus, 'text' => $text));
                }

            } ?>
        </div>
    </div>
</section>
