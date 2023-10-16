<?php $title = get_field('title');
$icon = get_field('icon');
$criterias = get_field('criterias');
$position_icon_left_or_right = get_field('position_icon_left_or_right');
if ($position_icon_left_or_right) {
    $position_icon_left_or_right = 'right';
} else {
    $position_icon_left_or_right = 'left';
} ?>

<section class="criteria position-<?php echo $position_icon_left_or_right; ?>" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="criteria__wrapper wrapper-white">
            <?php if ($icon) : ?>
                <div class="criteria__icon"><?php echo wp_get_attachment_image($icon, 'full')?></div>
            <?php endif; ?>

            <div class="criteria__content">
                <?php if ($title) : ?>
                    <h3 class="criteria__title"><?php echo $title; ?></h3>
                <?php endif; ?>

                <?php if ($icon) : ?>
                    <div class="criteria__cards">
                        <?php foreach ($criterias as $card) :
                            $criteria = $card['criteria']; ?>
                            <div class="criteria__card">
                                <p class="criteria__name"><?php echo $criteria; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
