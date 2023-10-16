<?php $navigation_cards = get_field('navigation_cards'); ?>

<section class="navigation" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="custom-select__selected navigation--selected">
            <p class="custom-select__title">Navigazione</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                <rect x="1.41699" y="15.0713" width="2.0041" height="10.0032" transform="rotate(-135 1.41699 15.0713)" fill="#222222" />
                <rect x="0.00683594" y="2.34473" width="2.00175" height="9.99613" transform="rotate(-45 0.00683594 2.34473)" fill="#222222" />
            </svg>
        </div>

        <div class="navigation__wrapper custom-select__options cards-<?php echo count($navigation_cards); ?>">
            <?php foreach ($navigation_cards as $card) :
                $image = $card['navigation_image'];
                $anchor = $card['navigation_anchor'];
                $title = $card['navigation_title'];
                $desc = $card['navigation_description']; ?>
                <a href="<?php echo $anchor; ?>" class="navigation__card">
                    <div class="navigation__image" style="background-image: url('<?php echo wp_get_attachment_url($image); ?>')"></div>
                    <div class="navigation__text">
                        <p class="navigation__title"><?php echo $title; ?></p>
                        <?php if ($desc) : ?>
                            <p class="navigation__desc"><?php echo $desc; ?></0p>
                            <?php endif; ?>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>