<?php $title = get_field('title');
$cards = get_field('cards_how_to');  ?>

<section class="howto-images" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <?php if ($title) : ?>
            <h2 class="howto-images__title"><?php echo $title; ?></h2>
        <?php endif; ?>
        <div class="howto-images__cards">
            <?php foreach ($cards as $ind => $card) :
                $image = $card['image'];
                $title_card = $card['title'];
                $description = $card['description']; ?>
                <div class="howto-elem">
                    <div class="howto-elem__top">
                        <div class="howto-elem__image">
                            <?php echo wp_get_attachment_image($image, 'full'); ?>
                        </div>
                        <div class="howto-elem__text">
                            <p class="howto-elem__title">
                                <?php echo ($ind + 1);?>. <?php echo $title_card; ?>
                            </p>
                            <p class="howto-elem__desc">
                                <?php echo $description; ?>
                            </p>
                        </div>
                    </div>
                    <div class="howto-elem__bottom">
                        <p class="howto-elem__desc"><?php echo $description; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>