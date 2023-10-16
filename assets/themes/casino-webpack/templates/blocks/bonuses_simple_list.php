<?php $bonuses_simple_list = get_field('bonuses_simple_list');?>

<section class="bonuses-simple">
    <div class="wrapper">
        <?php foreach ($bonuses_simple_list as $bonuses) :
            $select_bonus = $bonuses['select_bonus'];
            $background_color = $bonuses['background_color'];
            $casino_id = get_field('select_casino', $select_bonus); ?>
            <div class="simple-card" style="background-color: <?php echo $background_color;?>;">
                <a href="<?php echo get_permalink($select_bonus); ?>" title="card bonus link" class="simple-card__link"></a>

                <div class="simple-card__top">
                    <?php echo get_the_post_thumbnail($casino_id, 'full'); ?>
                </div>
                <div class="simple-card__bottom"><?php echo get_field('title', $select_bonus)?></div>
            </div>
        <?php endforeach; ?>
    </div>
</section>