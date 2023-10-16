<?php $slot_id = $args['slot_id'];
$rtp = get_field('rtp', $slot_id);
$provider_name = get_field('provider_name', $slot_id);
$provider_icon = get_field('provider_icon', $slot_id);
$volatility = get_field('volatility', $slot_id); ?>

<div class="hot-cold-slot">
    <div class="hot-cold-slot__icon" style="background-image: url('<?php echo get_the_post_thumbnail_url($slot_id, 'full'); ?>')">

    </div>
    <div class="hot-cold-slot__body">
        <div class="hot-cold-slot__content">
            <div class="hot-cold-slot__provider">
                <?php if ($provider_icon) : ?>
                    <div class="provider__icon"><?php echo wp_get_attachment_image($provider_icon, 'full');?></div>
                <?php endif; ?>
                <p class="provider__name"><?php echo $provider_name;?></p>
            </div>
            <h5 class="hot-cold-slot__name"><?php echo get_the_title($slot_id);?></h5>
        </div>
        <div class="hot-cold-slot__mode">
            <div class="hot-cold-slot__rtp">
                <p class="value"><?php echo $rtp; ?>%</p>
                <p class="label">RTP </p>
            </div>
            <div class="hot-cold-slot__volatility">
                <p class="value <?php echo $volatility['value']; ?>"><?php echo $volatility['label']; ?></p>
                <p class="label">Volatilità </p>
            </div>
        </div>
    </div>
</div>
