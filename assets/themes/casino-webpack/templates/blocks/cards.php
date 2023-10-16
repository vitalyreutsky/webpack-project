<?php $cards = get_field('cards'); ?>

<section class="block-cards <?php if((count($cards) % 2) == 0) echo 'even';?>">
    <div class="wrapper">
        <?php foreach ($cards as $card) :
            $icon = $card['icon'];
            $title = $card['title'];
            $text = $card['text'];
            $background_color = $card['bacground_color']; ?>
            <div class="block-card" style="background-color: <?php echo $background_color; ?>">
                <div class="block-card__heading">
                    <?php if ($icon) : ?>
                        <div class="block-card__icon"><?php echo wp_get_attachment_image($icon, 'full'); ?></div>
                    <?php endif; ?>
                    <?php if ($title) : ?>
                        <h5 class="block-card__title"><?php echo $title; ?></h5>
                    <?php endif; ?>
                </div>
                <?php if ($text) : ?>
                    <p class="block-card__text"><?php echo $text; ?></p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
