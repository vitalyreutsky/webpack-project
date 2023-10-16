<?php $rating = $args['rating']; ?>
<div class="rating">
    <div class="rating__text"><span><?php echo $rating; ?></span>/5</div>
    <div class="rating__stars">

        <?php if ($rating > 0) : ?>
            <?php if (($rating) > 1) : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/Star10.svg'; ?>" alt="icon star">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/Star' . ($rating) * 10 . '.svg'; ?>" alt="icon star">
            <?php endif; ?>
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/img/Star0.svg'; ?>" alt="icon star">
        <?php endif; ?>

        <?php if ($rating > 1) : ?>
            <?php if (($rating - 1) > 1) : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/Star10.svg'; ?>" alt="icon star">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/Star' . ($rating - 1) * 10 . '.svg'; ?>" alt="icon star">
            <?php endif; ?>
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/img/Star0.svg'; ?>" alt="icon star">
        <?php endif; ?>

        <?php if ($rating > 2) : ?>
            <?php if (($rating - 2) > 1) : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/Star10.svg'; ?>" alt="icon star">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/Star' . ($rating - 2) * 10 . '.svg'; ?>" alt="icon star">
            <?php endif; ?>
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/img/Star0.svg'; ?>" alt="icon star">
        <?php endif; ?>

        <?php if ($rating > 3) : ?>
            <?php if (($rating - 3) > 1) : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/Star10.svg'; ?>" alt="icon star">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/Star' . ($rating - 3) * 10 . '.svg'; ?>" alt="icon star">
            <?php endif; ?>
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/img/Star0.svg'; ?>" alt="icon star">
        <?php endif; ?>

        <?php if ($rating > 4) : ?>
            <?php if (($rating - 4) > 1) : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/Star10.svg'; ?>" alt="icon star">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/Star' . ($rating - 4) * 10 . '.svg'; ?>" alt="icon star">
            <?php endif; ?>
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/img/Star0.svg'; ?>" alt="icon star">
        <?php endif; ?>
    </div>
</div>