    </main>

    <?php $footer_logo = get_field('footer_logo', 'option');
    $footer_text_left = get_field('footer_text_left', 'option');
    $footer_text_right = get_field('footer_text_right', 'option');
    $support_email = get_field('support_email', 'option');
    $footer_icons = get_field('footer_icons', 'option'); ?>

    <footer class="footer">
        <div class="wrapper">
            <div class="footer__top">
                <a class="footer__logo" title="footer logo" href="<?php echo get_home_url(); ?>"><?php echo App\Base\SvgSupport::get_inline_svg_by_id($footer_logo); ?></a>
                <div class="footer__icons">
                    <?php foreach ($footer_icons as $footer_icon) :
                        $icon = $footer_icon['footer_icon'];
                        $link = $footer_icon['footer_link']; ?>
                        <a href="<?php echo $link; ?>" title="footer logo support" class="footer__icon">
                            <?php echo wp_get_attachment_image($icon); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="footer__body">
                <div class="footer__col left">
                    <?php echo $footer_text_left; ?>
                </div>
                <div class="footer__col right">
                    <?php echo $footer_text_right; ?>
                </div>
            </div>

            <div class="footer__bottom">

                <nav class="footer__nav">
                    <?php $locations = get_nav_menu_locations();
                    $nav_items = wp_get_nav_menu_items($locations['footer-menu']);
                    foreach ($nav_items as $nav_item) : ?>
                        <a class="footer__link hover-link white" href="<?php echo $nav_item->url; ?>"><?php echo $nav_item->title; ?></a>
                    <?php endforeach; ?>

                    <a class="footer__link hover-link white" href="mailto:<?php echo $support_email; ?>">
                        Vuoi fare una domanda? Contattaci <?php echo $support_email; ?>
                    </a>
                </nav>
            </div>
        </div>
    </footer>

    <?php if (!isset($_COOKIE["exitIntentShown"])) {
        get_template_part('templates/popups/popup-exit');
        get_template_part('templates/popups/modal-registr');
    } ?>

    <?php wp_footer(); ?>

    </body>

    </html>