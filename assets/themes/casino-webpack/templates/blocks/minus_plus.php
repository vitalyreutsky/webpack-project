<?php $plus_heading = get_field('plus_heading');
$plus_list = get_field('plus_list');
$minus_heading = get_field('minus_heading');
$minus_list = get_field('minus_list'); ?>

<section class="plus-minus" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="plus-minus__wrapper wrapper-white">
            <div class="plus-minus__top">
                <div class="plus__heading plus-minus__heading"><?php echo $plus_heading;?></div>
                <div class="minus__heading plus-minus__heading"><?php echo $minus_heading;?></div>
            </div>

            <div class="plus-minus__body">
                <div class="plus__list plus-minus__list">
                    <ul>
                        <?php foreach ($plus_list as $plus) :
                            $plus_name = $plus['plus_name']; ?>
                            <li class="plus__elem plus-minus__elem"><?php echo $plus_name;?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="minus__list plus-minus__list">
                    <ul>
                        <?php foreach ($minus_list as $minus) :
                            $minus_name= $minus['minus_name']; ?>
                            <li class="minus__elem plus-minus__elem"><?php echo $minus_name;?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
