<?php
$title = get_field('title');
$text = get_field('description');
$image = get_field('image');
$bonuses = get_field('bonus');
?>

<section>
   <div class="wrapper test-wrapper">
      <div class="content-block wrapper-white">
         <div>
            <?php if ($image) : ?>
               <?php echo wp_get_attachment_image($image, 'full'); ?>
            <?php endif; ?>

            <?php if ($title) : ?>
               <h2><?php echo $title; ?></h2>
            <?php endif; ?>

            <?php if ($text) : ?>
               <p><?php echo $text; ?></p>
            <?php endif; ?>
         </div>

         <div class="test-bonuses">
            <?php foreach ($bonuses as $post_id) {
               get_template_part('templates/cards/horizontal-bonus-card', null, array('bonus_id' => $post_id));
            } ?>
         </div>

         <div class="test-table">
            <?php get_template_part('templates/elements/table-test', null, $args = get_field('table')); ?>
         </div>
      </div>
   </div>
</section>