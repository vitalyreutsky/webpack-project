<?php $heading_left_col = $args['heading_left_col'];
$heading_right_col = $args['heading_right_col'];
$heading_color = $args['heading_color'];
$table_rows = $args['table_rows']; ?>

<div class="table top-10-casino">
    <?php if ($heading_left_col && $heading_right_col) : ?>
    <div class="table__heading" style="background-color: <?php echo $heading_color; ?>">
        <div class="table__row">
            <div class="table__col"><?php echo $heading_left_col; ?></div>
            <div class="table__col"><?php echo $heading_right_col; ?></div>
        </div>
    </div>
    <?php endif; ?>
    <?php if ($table_rows) : ?>
    <div class="table__body">
        <?php foreach ($table_rows as $table_row) :
            $left_col_text  = $table_row['left_col_text'];
            $right_col_text = $table_row['right_col_text']; ?>
            <div class="table__row">
                <div class="table__col">
                    <?php echo $left_col_text; ?>
                </div>
                <div class="table__col">
                    <?php echo $right_col_text; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>