<?php $title = get_field('title');
$bonuses = get_field('bonuses');
$background_image = get_field('background_image');
$left_image = get_field('left_image'); ?>

<section class="heading" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="heading__wrapper" style="background-image: url('<?php echo wp_get_attachment_url($background_image); ?>')">
            <?php if ($left_image) : ?>
                <div class="heading__img"><?php echo wp_get_attachment_image($left_image, 'full', false, array('loading' => '')); ?></div>
            <?php endif; ?>
            <div class="heading__content">
                <?php if ($title) : ?>
                    <h2 class="heading__title"><?php echo $title; ?></h2>
                <?php endif; ?>
                <div class="heading__slots">
                    <?php foreach ($bonuses as $bonus_id) {
                        get_template_part('templates/cards/vertical-bonus-card', null, array('bonus_id' => $bonus_id));
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>