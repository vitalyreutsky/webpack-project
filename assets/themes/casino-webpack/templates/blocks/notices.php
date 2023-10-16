<?php $notices_cards = get_field('notices_cards'); ?>

<section class="notices">
    <div class="wrapper">
        <?php foreach ($notices_cards as $notice) :
            $subtitle = $notice['subtitle'];
            $title    = $notice['title'];
            $text     = $notice['text']; ?>
            <div class="notice">
                <div class="notice__span"></div>
                <div class="notice__content">
                    <p class="notice__subtitle"><?php echo $subtitle; ?></p>
                    <?php if ($title) : ?>
                        <h5 class="notice__title"><?php echo $title; ?></h5>
                    <?php endif; ?>
                    <p class="notice__text"><?php echo $text; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>