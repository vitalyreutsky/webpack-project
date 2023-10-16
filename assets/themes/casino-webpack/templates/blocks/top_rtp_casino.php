<?php $table = get_field('table');
$table_heading = $table['table_heading'];
$position_right_or_left = $table['position_right_or_left'];
if ($position_right_or_left) {
    $position_right_or_left = 'right';
} else {
    $position_right_or_left = 'left';
}
$repeater_table_row = $table['repeater_table_row'];
$image_block = get_field('image_block'); ?>

<section class="rtp-casino table-<?php echo $position_right_or_left; ?>" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="rtp-casino__wrapper wrapper-white">
            <?php if ($image_block) : ?>
                <div class="rtp-casino__img">
                    <?php echo wp_get_attachment_image($image_block, 'full'); ?>
                </div>
            <?php endif; ?>
            <div class="rtp-casino__table_wrapper">
                <?php if ($table_heading) : ?>
                    <h2 class="rtp-casino__title"><?php echo $table_heading; ?></h2>
                <?php endif; ?>
                <div class="rtp-casino__table">
                    <div class="rtp-casino__table_heading">
                        <div class="rtp-casino__table_col">
                            <span>Casino</span>
                        </div>
                        <div class="rtp-casino__table_col">
                            <span>RTP</span>
                            <div class="tooltip-wrapper">
                                <div class="tooltip-icon">
                                    <svg width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M6.50016 12.4163C9.4917 12.4163 11.9168 9.99122 11.9168 6.99967C11.9168 4.00813 9.4917 1.58301 6.50016 1.58301C3.50862 1.58301 1.0835 4.00813 1.0835 6.99967C1.0835 9.99122 3.50862 12.4163 6.50016 12.4163Z" stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.5 9.16634V6.99967M6.5 4.83301H6.50542" stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>

                                <div class="tooltip-text">
                                    <span>Rapporto di remunerazione</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rtp-casino__table_body">
                        <?php foreach ($repeater_table_row as $row) :
                            $select_casino = $row['select_casino'];
                            $rtp_value = $row['rtp_value'];
                            if ($select_casino && $rtp_value) : ?>
                                <div class="rtp-casino__table_row">
                                    <div class="rtp-casino__table_col">
                                        <a class="rtp-casino__table_casino hover-link" href="<?php echo get_the_permalink($select_casino); ?>"><?php echo get_the_title($select_casino);?></a>
                                    </div>
                                    <div class="rtp-casino__table_col">
                                        <span class="rtp-casino__table_rtp"><?php echo $rtp_value; ?></span>
                                    </div>
                                </div>
                            <?php endif; endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>