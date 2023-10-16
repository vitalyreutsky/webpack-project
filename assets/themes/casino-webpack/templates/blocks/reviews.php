<?php $title = get_field('title');
$text_content = get_field('text_content');
$cards = get_field('cards'); ?>

<section class="reviews" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <?php if ($title) : ?>
            <h2 class="reviews__title"><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if ($text_content) : ?>
            <div class="reviews__content"><?php echo $text_content; ?></div>
        <?php endif; ?>
        <?php if ($cards) : ?>
            <div class="reviews__cards">
                <?php foreach ($cards as $card) :
                    $icon_card = $card['icon_card'];
                    $name_card = $card['name_card'];
                    if ($icon_card && $name_card) : ?>
                    <div class="reviews__card">
                        <div class="reviews__icon"><?php echo wp_get_attachment_image($icon_card, 'full'); ?></div>
                        <p class="reviews__name"><?php echo $name_card; ?></p>
                    </div>
                <?php endif; endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
