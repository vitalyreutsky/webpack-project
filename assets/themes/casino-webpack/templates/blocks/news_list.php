<?php $title = get_field('title');
$description = get_field('description');
$icon = get_field('icon');
$button = get_field('button');
if( $button ) {
    $button_url    = $button['url'];
    $button_title  = $button['title'];
    $button_target = $button['target'] ? $button['target'] : '_self';
}
$position_list_left_or_right = get_field('position_list_left_or_right');
if ($position_list_left_or_right) {
    $position_list_left_or_right = 'right';
} else {
    $position_list_left_or_right = 'left';
}
$select_posts = get_field('select_posts'); ?>

<section class="news-list type-<?php echo $position_list_left_or_right; ?>" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="news-list__wrapper">
            <?php if ($select_posts) : ?>
                <div class="news-list__posts">
                    <?php foreach ($select_posts as $post_id) {
                        get_template_part('templates/cards/post-card-horizontal', null, array('post_id' => $post_id));
                    } ?>

                    <?php if ($button) : ?>
                        <a class="news-list__btn btn_mobile" href="<?php echo $button_url; ?>" target="<?php echo esc_attr( $button_target ); ?>">
                            <?php echo $button_title; ?>
                            <span class="arrow">
                            <span class="arrow-first"></span>
                            <span class="arrow-second"></span>
                        </span>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="news-list__content">
                <div class="news-list__body">
                    <div class="news-list__top">
                        <?php if ($title) : ?>
                            <h2 class="news-list__title"><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <?php if ($icon) : ?>
                            <div class="news-list__icon"><?php echo wp_get_attachment_image($icon); ?></div>
                        <?php endif; ?>
                    </div>
                    <?php if ($button) : ?>
                        <p class="news-list__desc"><?php echo $description; ?></p>
                    <?php endif; ?>
                </div>

                <?php if ($button) : ?>
                    <a class="news-list__btn" href="<?php echo $button_url; ?>" target="<?php echo esc_attr( $button_target ); ?>">
                        <?php echo $button_title; ?>
                        <span class="arrow">
                            <span class="arrow-first"></span>
                            <span class="arrow-second"></span>
                        </span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
