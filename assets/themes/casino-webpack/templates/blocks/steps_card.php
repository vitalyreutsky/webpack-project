<?php $steps = get_field('steps'); ?>

<section class="steps step-<?php echo count($steps);?>">
    <div class="wrapper">
        <?php foreach ($steps as $step) :
            $icon  = $step['icon'];
            $title = $step['title'];
            $text  = $step['text']; ?>
            <div class="step">
                <div class="step__heading">
                    <?php if ($icon) : ?>
                        <div class="step__icon"><?php echo wp_get_attachment_image($icon, 'full'); ?></div>
                    <?php endif; ?>
                    <?php if ($title) : ?>
                        <h5 class="step__title"><?php echo $title; ?></h5>
                    <?php endif; ?>
                </div>
                <?php if ($text) : ?>
                    <p class="step__text"><?php echo $text; ?></p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>

    </div>
</section>
