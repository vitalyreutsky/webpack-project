<?php $aside_license_card = get_field('aside_license_card');
$icon_license = $aside_license_card['icon_license'];
$first_number_title = $aside_license_card['first_number_title'];
$first_number_subtitle = $aside_license_card['first_number_subtitle'];
$second_number_title = $aside_license_card['second_number_title'];
$second_number_subtitle = $aside_license_card['second_number_subtitle'];
$license_dates = $aside_license_card['license_dates'];
$one_or_more_content_blocks = get_field('one_or_more_content_blocks');
if ($one_or_more_content_blocks) {
    $one_or_more_content_blocks = 'one';
} else {
    $one_or_more_content_blocks = 'more';
}
$content_one_content_block = get_field('content_one_content_block');
$content_blocks = get_field('content_blocks'); ?>

<section class="licenses type-<?php echo $one_or_more_content_blocks; ?>" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="licenses__content type-<?php echo $one_or_more_content_blocks; ?>">
            <?php if ($one_or_more_content_blocks == 'one') {
                echo $content_one_content_block;
            } else {
                foreach ($content_blocks as $block) :
                    $content_block = $block['content_block']; ?>
                    <div class="licenses__block">
                        <?php echo $content_block; ?>
                    </div>
            <?php endforeach; } ?>
        </div>

        <div class="licenses__aside">
            <div class="licenses__card">
                <?php if ($icon_license) : ?>
                    <div class="licenses__icon">
                        <?php echo wp_get_attachment_image($icon_license, 'full'); ?>
                    </div>
                <?php endif; ?>
                <div class="licenses__numbers">
                    <?php if ($first_number_title || $first_number_subtitle) : ?>
                        <div class="licenses__numbers_item">
                            <p class="licenses__number"><?php echo $first_number_title;?></p>
                            <p class="licenses__number_subtitle"><?php echo $first_number_subtitle;?></p>
                        </div>
                    <?php endif; ?>
                    <?php if ($second_number_title || $second_number_subtitle) : ?>
                        <div class="licenses__numbers_item">
                            <p class="licenses__number"><?php echo $second_number_title;?></p>
                            <p class="licenses__number_subtitle"><?php echo $second_number_subtitle;?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if ($license_dates) : ?>
                    <div class="licenses__dates">
                        <?php foreach ($license_dates as $date) :
                            $license_date_name = $date['license_date_name'];
                            $license_date = $date['license_date']; ?>
                            <div class="licenses__date">
                                <div class="licenses__date_name">
                                    <span><?php echo $license_date_name;?></span>
                                </div>
                                <div class="licenses__date_value">
                                    <span><?php echo $license_date;?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
