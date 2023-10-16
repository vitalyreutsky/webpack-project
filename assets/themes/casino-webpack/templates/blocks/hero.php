<?php $title = get_field('title');
$subtitle = get_field('subtitle');
$description = get_field('description');
$show_expert_card = get_field('show_expert_card');
$select_expert = get_field('select_expert');
?>

<section class="hero" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="hero__text">
            <?php if ($subtitle) : ?>
                <p class="hero__subtitle"><?php echo $subtitle; ?></p>
            <?php endif; ?>
            <?php if ($title) : ?>
                <h1 class="hero__title"><?php echo $title; ?></h1>
            <?php endif; ?>
            <?php if ($description) : ?>
                <p class="hero__desc"><?php echo $description; ?></p>
            <?php endif; ?>
        </div>
        <?php if ($show_expert_card && $select_expert) : ?>
            <div class="hero__expert">
                <?php get_template_part('templates/cards/expert-card', null, array('expert_id' => $select_expert)); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
