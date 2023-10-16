<?php $provider_icon = get_field('provider_icon');
$provider_title = get_field('provider_title');
$provider_subtitle = get_field('provider_subtitle');
$slots = get_field('slots');
$bonuses = get_field('bonuses');
$background_color_heading = get_field('background_color_heading');
$block_content = get_field('block_content'); ?>

<section class="providers-category">
    <div class="wrapper">
        <div class="providers-category__wrapper wrapper-white">
            <div class="providers-category__heading" style="background-color: <?php echo $background_color_heading; ?>;">
                <?php if ($provider_icon) : ?>
                    <div class="providers-category__icon">
                        <?php echo wp_get_attachment_image($provider_icon, 'full'); ?>
                    </div>
                <?php endif; ?>
                <div class="providers-category__text">
                    <?php if ($provider_title) : ?>
                        <h2 class="providers-category__title"><?php echo $provider_title; ?></h2>
                    <?php endif; ?>
                    <?php if ($provider_subtitle) : ?>
                        <div class="providers-category__subtitle"><?php echo $provider_subtitle; ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="providers-category__body">
                <div class="providers-category__slots">
                    <?php foreach ($slots as $slot) {
                        get_template_part('templates/cards/background-slot', null, array('slot_id' => $slot));
                    } ?>
                </div>
                <div class="providers-category__content">
                    <?php echo $block_content; ?>
                </div>
                <div class="providers-category__bonuses">
                    <?php foreach ($bonuses as $bonus) {
                        get_template_part('templates/cards/horizontal-bonus-card', null, array('bonus_id' => $bonus));
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
