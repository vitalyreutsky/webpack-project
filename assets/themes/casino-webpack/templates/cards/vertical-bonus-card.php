<?php $bonus_id = $args['bonus_id'];
$casino_id = get_field('select_casino', $bonus_id);
$rating = get_field('rating', $casino_id); ?>

<div class="vertical-bonus">
    <a href="<?php echo get_permalink($bonus_id); ?>" target="_blank" title="card bonus link" class="vertical-bonus__link"></a>

    <div class="vertical-bonus__wrapper">
        <div class="vertical-bonus__top">
            <div class="vertical-bonus__photo">
                <?php
                    echo wp_get_attachment_image(get_post_thumbnail_id($casino_id), 'full', false, array('loading' => ''));
            ?>
            </div>
        </div>
        <div class="vertical-bonus__body">
            <div class="vertical-bonus__title">
                <?php echo get_field('title', $bonus_id)?>
            </div>
            <div class="vertical-bonus__desc">
                <?php echo get_field('preview', $bonus_id)?>
            </div>
        </div>
        <div class="vertical-bonus__bottom">
            <div class="vertical-bonus__rating">
                <?php get_template_part('templates/elements/rating', null, array('rating' => $rating));?>
            </div>
            <a href="<?php echo get_permalink($bonus_id); ?>" target="_blank" class="vertical-bonus__btn btn">bonus di richiesta</a>
        </div>
    </div>
</div>