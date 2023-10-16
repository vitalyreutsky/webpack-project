<?php $titile = get_field('titile');
$description = get_field('description');
$select_expert = get_field('select_expert'); ?>

<section class="expert-text" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="expert-text__text">
            <?php if ($titile) : ?>
                <h2 class="expert-text__title"><?php echo $titile; ?></h2>
            <?php endif; ?>
            <?php if ($description) : ?>
                <p class="expert-text__desc"><?php echo $description; ?></p>
            <?php endif; ?>
        </div>

        <div class="expert-text__card">
            <?php get_template_part('templates/cards/expert-card', null, array('expert_id' => $select_expert)); ?>
        </div>
    </div>
</section>
