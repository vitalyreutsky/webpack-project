<?php $title = get_field('title');
$text_content = get_field('text_content');
$table       = get_field('table');
$heading_left_col  = $table['heading_left_col'];
$heading_right_col = $table['heading_right_col'];
$heading_color     = $table['heading_color'];
$table_rows        = $table['table_rows']; ?>


<section class="prices-casino" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="prices-casino__wrapper wrapper-white">

            <div class="prices-casino__col">
                <?php if ($title) : ?>
                    <h2 class="prices-casino__title heading-italy"><?php echo $title; ?></h2>
                <?php endif; ?>

                <div class="prices-casino__text">
                    <?php echo $text_content; ?>
                </div>
            </div>

            <div class="prices-casino__table">
                <?php get_template_part('templates/elements/table-top-casino', null, array(
                    'heading_left_col'  => $heading_left_col,
                    'heading_right_col' => $heading_right_col,
                    'heading_color'     => $heading_color,
                    'table_rows'        => $table_rows,
                )); ?>
            </div>
        </div>
    </div>
</section>