<?php $image = get_field('popup_image', 'option');
$subtitle = get_field('popup_subtitle', 'option');
$title = get_field('popup_title', 'option');
$description = get_field('popup_description', 'option');
$bonuses = get_field('popup_select_bonuses', 'option'); ?>

<div class="popup">
    <div class="popup__overlay"></div>
    <div class="popup__wrapper">
        <div class="popup__container exit-popup">
            <div class="popup__close">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" fill="#F1F1F1"/>
                    <rect class="hover" x="8.06006" y="7.35352" width="12.1436" height="1" transform="rotate(45 8.06006 7.35352)" fill="#9D9D9D"/>
                    <rect class="hover" width="12.1436" height="1" transform="matrix(-0.707107 0.707107 0.707107 0.707107 15.9399 7.35352)" fill="#9D9D9D"/>
                    <rect class="hover-light" x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#F1F1F1"/>
                </svg>
            </div>
            <?php if ($image) : ?>
                <div class="exit-popup__image">
                    <?php echo wp_get_attachment_image($image, 'full'); ?>
                </div>
            <?php endif; ?>
            <div class="exit-popup__body">
                <div class="exit-popup__text">
                    <?php if ($subtitle) : ?>
                        <p class="exit-popup__subtitle"><?php echo $subtitle; ?></p>
                    <?php endif; ?>
                    <?php if ($title) : ?>
                        <h2 class="exit-popup__title"><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if ($description) : ?>
                        <p class="exit-popup__description"><?php echo $description; ?></p>
                    <?php endif; ?>
                </div>
                <?php if ($bonuses) : ?>
                    <div class="exit-popup__bonuses">
                        <?php foreach (array_rand($bonuses, 3) as $bonus) {
                            $bonus_id = $bonuses[$bonus];
                            get_template_part('templates/cards/horizontal-bonus-card', null, array('bonus_id' => $bonus_id));
                        } ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>