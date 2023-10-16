<?php
$head_left = $args['heading_left'];
$head_right = $args['heading_right'];
$rows = $args['rows'];

?>
<div class="table">
   <?php if ($head_left && $head_right) : ?>
      <div class="table__heading">
         <div class="table__row">
            <div class="table__col"><?php echo $head_left; ?></div>
            <div class="table__col"><?php echo $head_right; ?></div>
         </div>
      </div>
   <?php endif; ?>
   <?php if ($rows) : ?>
      <div class="table__body">
         <?php foreach ($rows as $table_row) :
            $left_col_text  = $table_row['left'];
            $right_col_text = $table_row['right']; ?>
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