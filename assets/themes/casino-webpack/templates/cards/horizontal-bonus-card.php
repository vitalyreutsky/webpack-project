<?php $bonus_id = $args['bonus_id'];
$ind = $args['ind'];
$casino_id = get_field('select_casino', $bonus_id);
$rating = get_field('rating', $casino_id);
$t = strtotime('+'. $ind .' day 00:00:00');
?>

<div class="horizontal-bonus wrapper-white">
    <a href="<?php echo get_permalink($bonus_id); ?>" target="_blank" title="card bonus link" class="horizontal-bonus__link"></a>

    <?php if (isset($ind)) { ?>
        <div class="horizontal-bonus__label-date"><?php echo App\Helpers\Init::getItalianDate(date('n', $t), date('j', $t), true); ?></div>
    <?php } ?>

    <div class="horizontal-bonus__wrapper">
        <div class="horizontal-bonus__main">
            <div class="horizontal-bonus__logo">
                <?php echo get_the_post_thumbnail($casino_id, 'full'); ?>
            </div>
            <div class="horizontal-bonus__rating">
                <?php get_template_part('templates/elements/rating', null, array('rating' => $rating));?>
            </div>
        </div>

        <div class="horizontal-bonus__text">
            <div class="horizontal-bonus__title"><?php echo get_field('title', $bonus_id)?></div>
            <div class="horizontal-bonus__desc"><?php echo get_field('preview', $bonus_id)?></div>
        </div>

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