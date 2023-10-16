<?php $use_aside_or_table = get_field('use_aside_or_table');
if ($use_aside_or_table) {
    $use_aside_or_table = 'aside';
} else {
    $use_aside_or_table = 'table';
}
$vertical_or_horizontal_card = get_field('vertical_or_horizontal_card');
if ($vertical_or_horizontal_card) {
    $vertical_or_horizontal_card = 'vertical';
} else {
    $vertical_or_horizontal_card = 'horizontal';
}
$aside = get_field('aside');
$table_top_heading = get_field('table_top_heading');
$list_casino_winners = get_field('list_casino_winners'); ?>

<section class="summary-casino type-<?php echo $use_aside_or_table; ?> type-card-<?php echo $vertical_or_horizontal_card; ?>" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <?php if ($use_aside_or_table == 'aside') :
            $aside = get_field('aside');
            $top_aside_text = $aside['top_aside_text'];
            $top_aside_color = $aside['top_aside_color'];
            $aside_title = $aside['aside_title'];
            $aside_description = $aside['aside_description']; ?>
            <div class="summary-casino__aside">
                <?php if ($top_aside_text) : ?>
                    <div class="summary-casino__aside_top" style="background-color: <?php echo $top_aside_color; ?>">
                        <span><?php echo $top_aside_text; ?></span>
                    </div>
                <?php endif; ?>
                <div class="summary-casino__aside_body">
                    <?php if ($aside_title) : ?>
                        <p class="summary-casino__aside_title"><?php echo $aside_title; ?></p>
                    <?php endif;
                    if ($aside_description) : ?>
                        <p class="summary-casino__aside_subtitle"><?php echo $aside_description; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php else : if ($table_top_heading) : ?>
                <div class="summary-casino__heading"><?php echo $table_top_heading; ?></div>
        <?php endif;
        endif; ?>
        <div class="summary-casino__list <?php echo $use_aside_or_table; ?> type-<?php echo $vertical_or_horizontal_card; ?>">
            <?php foreach ($list_casino_winners as $casino_winner) :
                $winner_status_casino = $casino_winner['winner_status_casino'];
                $select_casino = $casino_winner['select_casino']; ?>
                <div class="summary-casino__elem">
                    <?php if ($winner_status_casino) : ?>
                        <p class="summary-casino__status"><?php echo $winner_status_casino; ?></p>
                    <?php endif; ?>
                    <?php if ($select_casino) : ?>
                        <div class="summary-casino__name">
                            <a class="summary-casino__link hover-link" href="<?php echo get_the_permalink($select_casino); ?>">
                                <?php echo get_the_title($select_casino); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>