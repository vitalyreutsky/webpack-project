<?php $youtube_video_link = get_field('youtube_video_link');
$placeholder_video_image = get_field('placeholder_video_image');
$right_image = get_field('right_image');
$right_link = get_field('right_link');
if ($right_link) {
    $right_link_url    = $right_link['url'];
    $right_link_title  = $right_link['title'];
    $right_link_target = $right_link['target'] ? $right_link['target'] : '_self';
}
if ($youtube_video_link && $placeholder_video_image) : ?>

    <section class="video <?php if (!$right_image) {
                                echo 'solo';
                            } ?>" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
        <div class="wrapper">
            <a class="video__block" data-iframe=<?php echo $youtube_video_link; ?> style="background-image: url('<?php echo wp_get_attachment_image_url($placeholder_video_image, 'full'); ?>'">
                <button class="video__block_btn" title="start video">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                        <g filter="url(#filter0_b_292_267)">
                            <circle cx="50" cy="50" r="48.5" fill="white" fill-opacity="0.08" stroke="white" stroke-width="3" />
                            <path d="M65 50.5L41.75 69.1195L41.75 31.8805L65 50.5Z" fill="white" />
                        </g>
                        <defs>
                            <filter id="filter0_b_292_267" x="-32" y="-32" width="164" height="164" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="16" />
                                <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_292_267" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_292_267" result="shape" />
                            </filter>
                        </defs>
                    </svg>
                </button>
            </a>

            <?php if ($right_image) : ?>
                <div class="video__image" style="background-image: url('<?php echo wp_get_attachment_image_url($right_image, 'full'); ?>'">
                    <?php if ($right_link) : ?>
                        <a href="<?php echo $right_link_url; ?>" class="video__btn" target="<?php echo esc_attr($right_link_target); ?>">
                            <?php echo $right_link_title; ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php endif; ?>