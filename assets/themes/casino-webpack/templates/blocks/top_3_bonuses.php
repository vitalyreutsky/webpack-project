<?php $title = get_field('title');
$description = get_field('description');
$right_image_background = get_field('right_image_background');
$select_bonus_card = get_field('select_bonus_card');
$use_top_heading = get_field('use_top_heading');
$top_icon = get_field('top_icon');
$top_title = get_field('top_title');
$top_description = get_field('top_description'); ?>

<section class="top-bonuses <?php if ($use_top_heading) echo 'with-heading'; ?> " <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <?php if ($use_top_heading) : ?>
            <div class="top-bonuses__heading">
                <?php if ($top_icon) : ?>
                    <div class="top-bonuses__icon">
                        <?php echo wp_get_attachment_image($top_icon, 'full'); ?>
                    </div>
                <?php endif; ?>
                <div class="top-bonuses__heading_text">
                    <?php if ($top_title) : ?>
                        <h2 class="top-bonuses__heading_title"><?php echo $top_title;?></h2>
                    <?php endif; ?>
                    <?php if ($top_description) : ?>
                        <p class="top-bonuses__heading_desc"><?php echo $top_description;?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="top-bonuses__wrapper">
            <div class="top-bonuses__text">
                <?php if ($title) : ?>
                    <?php if ($use_top_heading) : ?>
                        <h3 class="top-bonuses__title"><?php echo $title;?></h3>
                    <?php else : ?>
                        <h2 class="top-bonuses__title"><?php echo $title;?></h2>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if ($description) : ?>
                    <p class="top-bonuses__desc"><?php echo $description;?></p>
                <?php endif; ?>
            </div>
            <div class="top-bonuses__cards" style="background-image: url('<?php echo wp_get_attachment_url($right_image_background); ?>')">
                <?php foreach ($select_bonus_card as $bonus_id) {
                    get_template_part('templates/cards/vertical-bonus-card', null, array('bonus_id' => $bonus_id));
                } ?>
            </div>
        </div>
    </div>
</section>
