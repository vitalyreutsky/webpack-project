<?php $hot = get_field('hot');
$hot_icon = $hot['hot_icon'];
$hot_title = $hot['hot_title'];
$hot_slots = $hot['hot_slots'];
$hot_bottom_title = $hot['hot_bottom_title'];
$hot_bottom_description = $hot['hot_bottom_description'];
$cold = get_field('cold');
$cold_icon = $cold['cold_icon'];
$cold_title = $cold['cold_title'];
$cold_slots = $cold['cold_slots'];
$cold_bottom_title = $cold['cold_bottom_title'];
$cold_bottom_description = $cold['cold_bottom_description'];?>

<section class="hot-cold">
    <div class="wrapper">
        <div class="hot-cold__wrapper">
            <div class="hot-cold__col hot">

                <div class="hot-cold__heading">
                    <?php if ($hot_icon) : ?>
                        <div class="hot-cold__icon"><?php echo wp_get_attachment_image($hot_icon, 'full');?></div>
                    <?php endif; ?>
                    <?php if ($hot_title) : ?>
                        <h3 class="hot-cold__title"><?php echo $hot_title; ?></h3>
                    <?php endif; ?>
                </div>
                <div class="hot-cold__slots">
                    <?php foreach ($hot_slots as $slot) {
                        get_template_part('templates/cards/hot-cold-cards', null, array('slot_id' => $slot));
                    } ?>
                </div>

            </div>
            <div class="hot-cold__col cold">
                <div class="hot-cold__heading">
                    <?php if ($cold_icon) : ?>
                        <div class="hot-cold__icon"><?php echo wp_get_attachment_image($cold_icon, 'full');?></div>
                    <?php endif; ?>
                    <?php if ($cold_title) : ?>
                        <h3 class="hot-cold__title"><?php echo $cold_title; ?></h3>
                    <?php endif; ?>
                </div>
                <div class="hot-cold__slots">
                    <?php foreach ($cold_slots as $slot) {
                        get_template_part('templates/cards/hot-cold-cards', null, array('slot_id' => $slot));
                    } ?>
                </div>

            </div>
        </div>
        <?php if (($hot_bottom_title || $hot_bottom_description) && ($cold_bottom_title || $cold_bottom_description)) : ?>
            <div class="hot-cold__bottom">
                <div class="hot-cold__col hot">
                    <?php if ($hot_bottom_title) : ?>
                        <h3 class="hot-cold__title_bottom"><?php echo $hot_bottom_title; ?></h3>
                    <?php endif; ?>
                    <?php if ($hot_bottom_description) : ?>
                        <p class="hot-cold__desc"><?php echo $hot_bottom_description; ?></p>
                    <?php endif; ?>
                </div>

                <div class="hot-cold__col cold">
                    <?php if ($cold_bottom_title) : ?>
                        <h3 class="hot-cold__title_bottom"><?php echo $cold_bottom_title; ?></h3>
                    <?php endif; ?>
                    <?php if ($cold_bottom_description) : ?>
                        <p class="hot-cold__desc"><?php echo $cold_bottom_description; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
