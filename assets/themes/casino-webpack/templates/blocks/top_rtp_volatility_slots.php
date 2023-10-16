<?php $top_columns_text = get_field('top_columns_text');
$top_rtp_title = get_field('top_rtp_title');
$top_volatility_title = get_field('top_volatility_title');
$top_rtp_slots = get_field('top_rtp_slots');
$top_volatility_slots = get_field('top_volatility_slots');?>

<section class="top-slots">
    <div class="wrapper">
        <div class="top-slots__cols">
            <?php foreach ($top_columns_text as $col) :
                $title = $col['title'];
                $description = $col['description'];
                $background_color = $col['background_color']; ?>
                <div class="top-slots__col" style="background-color: <?php echo $background_color;?>;">
                    <?php if ($title) : ?>
                        <h5 class="top-slots__title"><?php echo $title; ?></h5>
                    <?php endif; ?>
                    <?php if ($description) : ?>
                        <p class="top-slots__desc"><?php echo $description; ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="top-slots__tables">

            <div class="top-slots__table">
                <?php if ($top_rtp_title) : ?>
                    <h4 class="top-slots__title"><?php echo $top_rtp_title; ?></h4>
                <?php endif; ?>
                <div class="top-slots__slots top-rtp">
                    <?php foreach ($top_rtp_slots as $slot) {
                        get_template_part('templates/cards/hot-cold-cards', null, array('slot_id' => $slot));
                    } ?>
                </div>
            </div>

            <div class="top-slots__table">
                <?php if ($top_volatility_title) : ?>
                    <h4 class="top-slots__title"><?php echo $top_volatility_title; ?></h4>
                <?php endif; ?>
                <div class="top-slots__slots top-volatility">
                    <?php foreach ($top_volatility_slots as $slot) {
                        get_template_part('templates/cards/hot-cold-cards', null, array('slot_id' => $slot));
                    } ?>
                </div>
            </div>

        </div>
    </div>
</section>