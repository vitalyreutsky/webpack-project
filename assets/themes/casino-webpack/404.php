<?php get_header();
$title = get_field('404_title', 'options');
$image = get_field('404_image', 'options');
$text  = get_field('404_text', 'options');
?>
    <main class="main">
        <div class="wrapper">
            <div class="p404__wrapper">
                <h1 class="p404__title"><?php echo $title; ?></h1>
                <div class="p404__image"><?php echo wp_get_attachment_image($image, 'full'); ?></div>
                <a href="<?php echo get_home_url(); ?>" class="p404__btn btn"><?php echo $text; ?></a>
            </div>
        </div>
    </main>
<?php
get_footer(); ?>