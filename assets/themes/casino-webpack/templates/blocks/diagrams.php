<?php $diagrams_horizontal = get_field('diagrams_horizontal');
$diagrams_vertical = get_field('diagrams_vertical');
$use_horizontal_or_vertical_diagrams = get_field('use_horizontal_or_vertical_diagrams');
if ($use_horizontal_or_vertical_diagrams) {
    $use_horizontal_or_vertical_diagrams = 'vertical';
} else {
    $use_horizontal_or_vertical_diagrams = 'horizontal';
}
?>

<section class="diagrams" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="diagrams__wrapper">
            <div class="diagrams__list type-<?php echo $use_horizontal_or_vertical_diagrams;?>">
                <?php if ($use_horizontal_or_vertical_diagrams == 'horizontal') :
                    foreach ($diagrams_horizontal as $diagram) :
                        $min_value = $diagram['min_value'];
                        $max_value = $diagram['max_value'];
                        $icon_diagram_elem = $diagram['icon_diagram_elem'];
                        $name_diagram_elem = $diagram['name_diagram_elem']; ?>
                        <div class="diagrams__li">
                            <div class="diagrams__ind">
                                <div class="diagrams__logo">
                                    <?php echo wp_get_attachment_image($icon_diagram_elem,'full'); ?>
                                </div>
                                <p class="diagrams__name"><?php echo $name_diagram_elem; ?></p>
                            </div>

                            <div class="diagrams__elem">
                                <div class="diagrams__scale">
                                    <div class="diagrams__value" style="width: <?php echo ($max_value - $min_value) * 100 / 20; ?>%; left: <?php echo ($min_value - 80) * 0.5 / 0.1;?>%">
                                        <span class="diagrams__digitals"><?php echo number_format($min_value, 1, ',' ,'') . ' - ' . number_format($max_value, 1, ',', '') . ' %';?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                endif; ?>

                <?php if ($use_horizontal_or_vertical_diagrams == 'vertical') : ?>
                    <div class="diagrams__grafics">
                        <?php foreach ($diagrams_vertical as $diagram) :
                            $min_value = $diagram['min_value'];
                            $max_value = $diagram['max_value']; ?>
                                <div class="diagrams__elem">
                                    <div class="diagrams__scale">
                                        <div class="diagrams__value" style="height: <?php echo ($max_value - $min_value) * 100 / 20; ?>%; bottom: <?php echo ($min_value - 80) * 0.5 / 0.1;?>%">
                                            <span class="diagrams__min"><?php echo number_format($min_value, 1, ',' ,'') . ' %';?></span>
                                            <span class="diagrams__max"><?php echo number_format($max_value, 1, ',', '') . ' %';?></span>
                                        </div>
                                    </div>
                                </div>
                        <?php endforeach; ?>
                    </div>

                <div class="diagrams__names">
                    <?php foreach ($diagrams_vertical as $diagram) :
                        $icon_diagram_elem = $diagram['icon_diagram_elem'];
                        $name_diagram_elem = $diagram['name_diagram_elem']; ?>
                        <div class="diagrams__name">
                            <div class="diagrams__icon">
                                <?php echo wp_get_attachment_image($icon_diagram_elem, 'full'); ?>
                            </div>
                            <p class="diagrams__title"><?php echo $name_diagram_elem; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>