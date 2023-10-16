<?php $title = get_field('title');
$text_content = get_field('text_content');
$cards = get_field('cards'); ?>

<section class="best-games" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="best-games__wrapper wrapper-white">
            <?php if ($title) : ?>
                <h2 class="best-games__title"><?php echo $title; ?></h2>
            <?php endif; ?>

            <?php if ($text_content) : ?>
                <div class="best-games__text"><?php echo $text_content; ?></div>
            <?php endif; ?>

            <?php if ($cards) : ?>
                <div class="best-games__cards">
                    <?php foreach ($cards as $card) :
                        $icon  = $card['icon'];
                        $title = $card['title'];
                        $text  = $card['text'];?>
                        <div class="best-games__card">
                            <?php if ($icon) : ?>
                                <div class="best-games__icon"><?php echo wp_get_attachment_image($icon, 'full'); ?></div>
                            <?php endif; ?>

                            <div class="best-games__content">
                                <?php if ($title) : ?>
                                    <h4 class="best-games__name"><?php echo $title; ?></h4>
                                <?php endif; ?>
                                <?php if ($text) : ?>
                                    <div class="best-games__desc"><?php echo $text; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>


