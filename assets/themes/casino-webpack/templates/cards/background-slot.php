<?php $slot_id = $args['slot_id'];
$rtp = get_field('rtp', $slot_id); ?>

<div class="background-slot">
    <div class="background-slot__icon">
        <?php echo get_the_post_thumbnail($slot_id, 'full'); ?>
    </div>
    <div class="background-slot__rtp">
        <span class="background-slot__label">RTP</span>
        <span class="background-slot__value"><?php echo $rtp; ?></span>
    </div>
    <h5 class="background-slot__name"><?php echo get_the_title($slot_id);?></h5>
</div>