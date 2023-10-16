<?php $slot_id = $args['slot_id'];
$rtp = get_field('rtp', $slot_id);?>

<div class="slot-card">
    <div class="slot-card__wrapper wrapper-white">
        <div class="slot-card__side">
            <div class="slot-card__icon" style="background-image: url('<?php echo get_the_post_thumbnail_url($slot_id, 'full');?>')">
            </div>
            <div class="slot-card__promo">
                <p class="slot-card__title">
                    <?php echo get_the_title($slot_id);?>
                </p>
                <?php if ($rtp) : ?>
                    <p class="slot-card__rtp"><?php echo $rtp;?>%</p>
                <?php endif;?>
                <p class="slot-card__subrtp">Ritorno al giocatore</p>
            </div>
        </div>

        <div class="slot-card__content"><p><?php echo get_the_excerpt($slot_id); ?></p></div>
    </div>
</div>
