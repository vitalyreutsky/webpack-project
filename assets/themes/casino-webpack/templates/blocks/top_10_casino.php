<?php $table       = get_field('table');
$heading_left_col  = $table['heading_left_col'];
$heading_right_col = $table['heading_right_col'];
$heading_color     = $table['heading_color'];
$table_rows        = $table['table_rows'];
$title             = get_field('title');
$icon              = get_field('icon');
$description       = get_field('description'); ?>

<section class="top-casino" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="top-casino__wrapper wrapper-white">
            <div class="top-casino__table ">
                <?php get_template_part('templates/elements/table-top-casino', null, array(
                    'heading_left_col'  => $heading_left_col,
                    'heading_right_col' => $heading_right_col,
                    'heading_color'     => $heading_color,
                    'table_rows'        => $table_rows,
                ));?>
            </div>
            <div class="top-casino__col">
                <div class="top-casino__heading">
                    <?php if ($title) : ?>
                        <h2 class="top-casino__title"><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if ($icon) : ?>
                        <div class="top-casino__icon">
                            <?php echo wp_get_attachment_image($icon, 'full'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if ($description) : ?>
                    <p class="top-casino__desc"><?php echo $description; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>