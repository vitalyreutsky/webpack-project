<?php $cards = get_field('cards');
$title = get_field('title');
$bottom_text_block = get_field('bottom_text_block'); ?>

<section class="simple-cards" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="simple-cards__wrapper">
            <?php if ($title) : ?>
                <h3 class="simple-cards__title"><?php echo $title; ?></h3>
            <?php endif; ?>
            <?php if ($cards) : ?>
                <div class="simple-cards__cards">
                    <?php foreach ($cards as $card) :
                        $icon_card  = $card['icon_card'];
                        $title_card = $card['title_card'];
                        $url_card   = $card['url_card']; ?>
                        <a class="simple-cards__card" href="<?php echo $url_card; ?>">
                            <?php if ($icon_card) : ?>
                                <div class="simple-cards__icon">
                                    <?php echo wp_get_attachment_image($icon_card, 'full'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($title_card) : ?>
                                <p class="simple-cards__name"><?php echo $title_card; ?></p>
                            <?php endif; ?>
                        </a>
                    <?php endforeach;?>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($bottom_text_block) : ?>
            <div class="simple-cards__bottom"><?php echo $bottom_text_block; ?></div>
        <?php endif; ?>
    </div>
</section>
