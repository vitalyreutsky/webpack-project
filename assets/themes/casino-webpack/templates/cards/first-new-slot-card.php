<?php $slot_id = $args['slot_id'];
$bonus_id = $args['bonus_id'];
$text = $args['text'];
$rtp = get_field('rtp', $slot_id);
$volatility = get_field('volatility', $slot_id);
$game_type = get_field('game_type', $slot_id);
$casino_id = get_field('select_casino', $bonus_id);


$title = $args['title'];
$background_image = $args['background_image'];
$t = strtotime('+0 day 00:00:00');
?>

<div class="horizontal-bonus__container first-card" style="background-image: url('<?php echo wp_get_attachment_url($background_image); ?>');">
    <div class="horizontal-bonus__left">
        <h2 class="horizontal-bonus__left_title"><?php echo $title; ?></h2>

        <div class="horizontal-bonus__date">
            <p><?php echo App\Helpers\Init::getItalianDate(date('n', $t), date('j', $t)); ?></p>
        </div>
    </div>

    <div class="slot-bonus-card">
        <a href="<?php echo get_permalink($bonus_id); ?>" target="_blank" title="card bonus link" class="slot-bonus-card__link"></a>


        <div class="slot-bonus-card__wrapper">
            <div class="slot-part">
                <div class="slot-part__icon" style="background-image: url('<?php echo get_the_post_thumbnail_url($slot_id, 'full'); ?>')">

                </div>
                <div class="slot-part__content">
                    <div class="slot-part__text">
                        <p class="slot-part__title"><?php echo get_the_title($slot_id);?></p>
                        <?php if ($text) : ?>
                            <div class="slot-part__desc"><?php echo $text;?></div>
                        <?php endif; ?>
                    </div>
                    <div class="slot-part__tabs">
                        <div class="slot-part__tab">
                            <p class="value"><?php echo $rtp; ?>%</p>
                            <p class="label">RTP</p>
                        </div>

                        <div class="slot-part__tab volatility">
                            <p class="value <?php echo $volatility['value']; ?>"><?php echo $volatility['label']; ?></p>
                            <p class="label">Volatilità</p>
                        </div>

                        <div class="slot-part__tab">
                            <p class="value"><?php echo $game_type['label']; ?></p>
                            <p class="label">Tipo di gioco</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bonus-part">
                <div class="bonus-part__content">
                    <div class="bonus-part__icon">
                        <?php echo get_the_post_thumbnail($casino_id, 'full'); ?>
                    </div>
                    <div class="bonus-part__title"><?php echo get_field('title', $bonus_id)?></div>
                </div>
                <a target="_blank" href="<?php echo get_permalink($bonus_id); ?>" class="bonus-part__btn btn">bonus di richiesta</a>
            </div>
        </div>
    </div>

</div>

