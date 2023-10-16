<?php $slot_id = $args['slot_id'];
$main = $args['main'];
$jackpot_value = get_field('jackpot_value', $slot_id); ?>


<div class="jackpot-slot <?php if ($main) { echo 'main';} ?>">
    <a class="jackpot-slot__link" title="card slot link" href="<?php echo get_permalink($slot_id); ?>"></a>

    <div class="jackpot-slot__wrapper">
        <div class="jackpot-slot__img">
            <?php echo get_the_post_thumbnail($slot_id, 'full'); ?>
        </div>

        <div class="jackpot-slot__body">
            <p class="jackpot-slot__value"><span><?php echo $jackpot_value; ?></span></p>
            <h5 class="jackpot-slot__title"><?php echo get_the_title($slot_id);?></h5>
            <p class="jackpot-slot__excerpt"><?php echo get_the_excerpt($slot_id); ?></p>
            <a class="jackpot-slot__btn" href="<?php echo get_permalink($slot_id); ?>">VINCERE QUI</a>
        </div>
    </div>
</div>