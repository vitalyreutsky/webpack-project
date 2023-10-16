<?php $expert_id = $args['expert_id'];
$autograph = get_field('autograph', $expert_id);
$update_date = get_field('update_date', $expert_id);
$status = get_field('status', $expert_id); ?>

<div class="expert-card wrapper-white">
    <div class="expert-card__top">
        <div class="expert-card__info">
            <div class="expert-card__photo">
                <?php echo get_the_post_thumbnail($expert_id, 'full'); ?>
            </div>

            <div class="expert-card__text">
                <h5 class="expert-card__name"><?php echo get_the_title($expert_id); ?></h5>
                <?php if ($update_date) : ?>
                    <p class="expert-card__secondary"><?php echo $update_date; ?></p>
                <?php endif; ?>
                <?php if ($status) : ?>
                    <p class="expert-card__secondary"><?php echo $status; ?></p>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($autograph) : ?>
            <div class="expert-card__autograph">
                <?php echo wp_get_attachment_image($autograph, 'full'); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="expert-card__desc"><?php echo get_the_excerpt($expert_id); ?></div>
</div>
