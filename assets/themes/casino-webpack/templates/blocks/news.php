<?php $title = get_field('title');
$btn = get_field('btn');
if( $btn ) {
    $btn_url    = $btn['url'];
    $btn_title  = $btn['title'];
    $btn_target = $btn['target'] ? $btn['target'] : '_self';
}
$select_posts = get_field('select_posts'); ?>

<section class="news" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <?php if ($title) : ?>
            <h2 class="news__title"><?php echo $title; ?></h2>
        <?php endif; ?>

        <?php if ($select_posts) : ?>
            <div class="news__posts">
                <?php foreach ($select_posts as $post_id) {
                    get_template_part('templates/cards/post-card-vertical', null, array('post_id' => $post_id));
                } ?>
            </div>
        <?php endif; ?>

        <?php if ($btn) : ?>
            <a href="<?php echo $btn_url; ?>" class="news__btn" target="<?php echo esc_attr( $btn_target ); ?>">
                <?php echo $btn_title; ?>
                <span class="arrow">
                    <span class="arrow-first"></span>
                    <span class="arrow-second"></span>
                </span>
            </a>
        <?php endif; ?>
    </div>
</section>
