<header class="header">
    <?php $site_logo = get_field('site_logo', 'options'); ?>
    <div class="header__top">
        <div class="wrapper">
            <?php if ($site_logo) : ?>
                <a href="<?php echo get_home_url(); ?>" title="header logo" class="header__logo"><?php echo App\Base\SvgSupport::get_inline_svg_by_id($site_logo); ?></a>
            <?php endif; ?>
            <div class="header__right">
                <nav class="header__nav">
                    <?php $locations = get_nav_menu_locations();
                    $nav_items = wp_get_nav_menu_items( $locations['header-menu'] );
                    foreach ($nav_items as $nav_item) : ?>
                        <a class="header__link <?php echo App\Helpers\Init::setCurrentLinkHeaderMenu($nav_item->url); ?>" href="<?php echo $nav_item->url; ?>"><?php echo $nav_item->title; ?></a>
                    <?php endforeach; ?>
                </nav>
            </div>

            <div class="header__burger">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <circle cx="20" cy="20" r="20" fill="white"/>
                    <path d="M12 17H28M12 23H28" stroke="#47B68E" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="header__subnav <?php if (get_post_type() == 'casino_page') {echo 'active';}?>" id="nav-casino">
        <div class="wrapper">
            <?php App\Base\Bootstrap::bootstrap_casino_menu();?>
        </div>
    </div>
    <div class="header__subnav <?php if (get_post_type() == 'slot_page') {echo 'active';}?>" id="nav-slots">
        <div class="wrapper">
            <?php App\Base\Bootstrap::bootstrap_slots_menu();?>
        </div>
    </div>
</header>

<div class="menu-mobile">
    <div class="menu-mobile__wrapper">
        <div class="menu-mobile__close">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                <circle cx="20" cy="20" r="19.5" fill="white" stroke="#D2D2D2"/>
                <path d="M15 15L25 25M15 25L25 15" stroke="#47B68E" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
            </svg>
        </div>
        <?php App\Base\Bootstrap::bootstrap_mobile_menu();?>
    </div>
</div>