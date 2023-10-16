<?php $bonus_id = $args['bonus_id'];
$title = $args['title'];
$background_image = $args['background_image'];
$casino_id = get_field('select_casino', $bonus_id);
$rating = get_field('rating', $casino_id);
$t = strtotime('+0 day 00:00:00');
?>

<div class="horizontal-bonus__container first-card" style="background-image: url('<?php echo wp_get_attachment_url($background_image); ?>');">
    <div class="horizontal-bonus__left">
        <h2 class="horizontal-bonus__left_title"><?php echo $title; ?></h2>

        <div class="horizontal-bonus__date">
            <p><?php echo App\Helpers\Init::getItalianDate(date('n', $t), date('j', $t)); ?></p>
        </div>
    </div>

    <div class="horizontal-bonus wrapper-white">
        <a href="<?php echo get_permalink($bonus_id); ?>" target="_blank" title="card bonus link" class="horizontal-bonus__link"></a>

        <div class="horizontal-bonus__label-date"><?php echo App\Helpers\Init::getItalianDate(date('n', $t), date('j', $t), true); ?></div>

        <div class="horizontal-bonus__wrapper">
            <div class="horizontal-bonus__main">
                <div class="horizontal-bonus__logo">
                    <?php echo get_the_post_thumbnail($casino_id, 'full'); ?>
                </div>
                <div class="horizontal-bonus__rating">
                    <?php get_template_part('templates/elements/rating', null, array('rating' => $rating));?>
                </div>
            </div>

            <div class="horizontal-bonus__content">
                <div class="horizontal-bonus__text">
                    <div class="horizontal-bonus__title"><?php echo get_field('title', $bonus_id)?></div>
                    <div class="horizontal-bonus__desc"><?php echo get_field('preview', $bonus_id)?></div>
                </div>

                <div class="horizontal-bonus__bottom">
                    <div class="horizontal-bonus__tabs">
                        <div class="horizontal-bonus__tab">
                            <div class="value"><?php echo get_field('turnover', $bonus_id); ?>x</div>
                            <div class="label">Entrate</div>
                        </div>
                        <div class="horizontal-bonus__tab">
                            <div class="value"><?php echo get_field('max_winnings', $bonus_id); ?></div>
                            <div class="label">Max G</div>
                        </div>
                        <div class="horizontal-bonus__tab">
                            <div class="value"><?php echo get_field('days_valid', $bonus_id); ?></div>
                            <div class="label">Giorni Validi</div>
                        </div>
                    </div>

                    <a class="horizontal-bonus__btn btn" target="_blank" href="<?php echo get_permalink($bonus_id); ?>">bonus di richiesta</a>
                </div>

            </div>
        </div>
    </div>
</div>

