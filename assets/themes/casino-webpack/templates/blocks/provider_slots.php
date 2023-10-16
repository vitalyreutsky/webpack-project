<?php $title = get_field('title');
$providers = get_field('providers'); ?>

<section class="providers">
    <div class="wrapper">
        <div class="providers__wrapper">
            <?php foreach ($providers as $ind => $provider) :
                $name_provider = $provider['name_provider'];
                $icon_provider = $provider['icon_provider'];
                $subtitle_provider = $provider['subtitle_provider'];
                $text_provider = $provider['text_provider'];
                $slots = $provider['slots']; ?>

                <?php if ($ind == 0) : ?>
                    <h2 class="providers__title_mobile"><?php echo $title; ?></h2>
                <?php endif; ?>

                <div class="providers__elem">
                    <div class="providers__content">
                        <?php if ($ind === 0 && $title) : ?>
                            <h2 class="providers__title heading-italy"><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <div class="providers__slots">
                            <?php foreach ($slots as $slot) :
                                $select_slot = $slot['select_slot'];
                                $text_content_slot = $slot['text_content_slot']; ?>
                                <div class="slot">
                                    <div class="slot__icon">
                                        <?php echo get_the_post_thumbnail($select_slot, 'full'); ?>
                                    </div>
                                    <div class="slot__content">
                                        <h4 class="slot__name"><?php echo get_the_title($select_slot);?></h4>
                                        <div class="slot__text"><?php echo $text_content_slot;?></div>
                                    </div>
                                    <div class="slot__desc_mobile"><?php echo $text_content_slot;?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="providers__aside">
                        <div class="aside">
                            <div class="aside__heading">
                                <?php if ($icon_provider) : ?>
                                    <div class="aside__icon">
                                        <?php echo wp_get_attachment_image($icon_provider, 'full'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="aside__text">
                                    <?php if ($name_provider) : ?>
                                        <h3 class="aside__title"><?php echo $name_provider; ?></h3>
                                    <?php endif; ?>
                                    <?php if ($subtitle_provider) : ?>
                                        <p class="aside__subtitle"><?php echo $subtitle_provider; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="aside__content"><?php echo $text_provider;?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
