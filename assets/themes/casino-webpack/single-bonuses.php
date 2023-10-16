<?php
get_header();
$bonus_page_title = get_field('bonus_page_title', 'options');
$bonus_page_description = get_field('bonus_page_description', 'options');
$loading_text = get_field('loading_text', 'options');
$casino_id = get_field('select_casino');

?>
<main class="main">
    <div class="bonus-page">
        <div class="bonus-page__container" data-external_link="<?php the_field('info_url'); ?>">
            <div class="wrapper wrapper-white">
                <div class="bonus-page__icon">
                    <?php echo get_the_post_thumbnail($casino_id, 'full'); ?>
                </div>
                <h1 class="bonus-page__title"><?php echo $bonus_page_title; ?></h1>
                <p class="bonus-page__desc"><?php echo $bonus_page_description; ?></p>
                <div class="bonus-page__loader">
                    <div class="loader">
                        <div class="loader__scale"></div>
                    </div>
                    <div class="loader__bottom">
                        <p class="loader__text"><?php echo $loading_text; ?></p>
                        <p class="loader__value">%</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bonus-page__bonuses">
            <div class="wrapper">
                <?php $items = new WP_Query(
                    array(
                        'post_type'     => 'bonuses',
                        'posts_per_page'=> 3,
                        'orderby'       => 'rand',
                        'fields'        => 'ids'
                    )
                );
                foreach ($items->posts as $bonus) {
                    get_template_part('templates/cards/horizontal-bonus-card', null, array('bonus_id' => $bonus));
                } ?>
            </div>
        </div>
    </div>
</main>
<?php
get_footer(); ?>
