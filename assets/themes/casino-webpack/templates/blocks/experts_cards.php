<?php $select_experts = get_field('select_experts'); ?>

<section class="experts-cards" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="experts-cards__wrapper <?php if (count($select_experts) % 3 == 0) echo 'triply'; ?>">
            <?php foreach ($select_experts as $select_expert) {
                get_template_part('templates/cards/expert-card', null, array('expert_id' => $select_expert));
            } ?>
        </div>
    </div>
</section>
