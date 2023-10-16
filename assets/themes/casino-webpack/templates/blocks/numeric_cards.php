<?php $list = get_field('list'); ?>

<section class="numeric" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <ol class="numeric__list">
            <?php foreach ($list as $ind => $elem) :
                $title = $elem['title'];
                $description = $elem['description']; ?>
                <li class="numeric__elem">
                    <div class="numeric__heading">
                        <span class="numeric__number"><span><?php echo $ind + 1;?></span></span>
                        <p class="numeric__title <?php if ($description) echo 'with-desc'; ?>"><?php echo $title;?></p>
                    </div>
                    <div class="numeric__desc"><?php echo $description;?></div>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>
