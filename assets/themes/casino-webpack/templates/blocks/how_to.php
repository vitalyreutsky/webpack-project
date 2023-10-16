<?php $how_to_cards = get_field('how_to_cards');
$image_how_to = get_field('image_how_to');
$image_mobile_how_to = get_field('image_mobile_how_to'); ?>

<section class="howto" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <?php if ($image_how_to) : ?>
            <div class="howto__image">
                <?php echo wp_get_attachment_image($image_how_to, 'full'); ?>
            </div>
        <?php endif; ?>

        <?php if ($image_how_to) : ?>
            <div class="howto__image_mobile">
                <?php echo wp_get_attachment_image($image_mobile_how_to, 'full'); ?>
            </div>
        <?php endif; ?>

        <?php if ($how_to_cards) : ?>
            <div class="howto__cards">
                <?php foreach ($how_to_cards as $ind => $card) :
                    $how_to_title = $card['how_to_title'];
                    $how_to_description = $card['how_to_description']; ?>
                    <div class="howto__card">
                        <span class="howto__number"><?php echo $ind + 1; ?></span>
                        <?php if ($how_to_title) : ?>
                            <h4 class="howto__title"><?php echo $how_to_title; ?></h4>
                        <?php endif; ?>
                        <?php if ($how_to_description) : ?>
                            <p class="howto__desc"><?php echo $how_to_description; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
