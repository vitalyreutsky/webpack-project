<?php $post_id = $args['post_id'];
$time_read = get_post_meta($post_id, 'count_text', true); ?>

<div class="post-card-horizontal wrapper-white">
    <div class="post-card-horizontal__wrapper">
        <?php if (get_the_post_thumbnail($post_id)) : ?>
            <div class="post-card-horizontal__img_wrapper">
                <div class="post-card-horizontal__img" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id, 'full');?>')"></div>
            </div>
        <?php endif; ?>
        <div class="post-card-horizontal__body">
            <h4 class="post-card-horizontal__title"><?php echo get_the_title($post_id); ?></h4>
            <p class="post-card-horizontal__desc"><?php echo get_the_excerpt($post_id); ?></p>
            <div class="post-card-horizontal__mode">
                <p class="post-card-horizontal__date"><?php echo get_the_date('d.m.Y', $post_id);?></p>
                <p class="post-card-horizontal__time">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <g clip-path="url(#clip0_415_384)">
                            <path d="M9 1.5C13.1422 1.5 16.5 4.85775 16.5 9C16.5 13.1422 13.1422 16.5 9 16.5C4.85775 16.5 1.5 13.1422 1.5 9C1.5 4.85775 4.85775 1.5 9 1.5ZM9 3C7.4087 3 5.88258 3.63214 4.75736 4.75736C3.63214 5.88258 3 7.4087 3 9C3 10.5913 3.63214 12.1174 4.75736 13.2426C5.88258 14.3679 7.4087 15 9 15C10.5913 15 12.1174 14.3679 13.2426 13.2426C14.3679 12.1174 15 10.5913 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 4.5C9.1837 4.50002 9.361 4.56747 9.49828 4.68954C9.63556 4.81161 9.72326 4.97981 9.74475 5.16225L9.75 5.25V8.6895L11.7802 10.7198C11.9148 10.8547 11.9929 11.0358 11.9987 11.2263C12.0045 11.4167 11.9376 11.6023 11.8116 11.7452C11.6855 11.8881 11.5098 11.9777 11.3201 11.9958C11.1305 12.0139 10.941 11.9591 10.7903 11.8425L10.7198 11.7802L8.46975 9.53025C8.35318 9.41358 8.27832 9.26175 8.25675 9.09825L8.25 9V5.25C8.25 5.05109 8.32902 4.86032 8.46967 4.71967C8.61032 4.57902 8.80109 4.5 9 4.5Z" fill="#C7C7C7"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_415_384">
                                <rect width="18" height="18" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <?php echo $time_read; ?> min
                </p>
            </div>
        </div>
    </div>
    <a class="post-card-horizontal__link" title="card post link" href="<?php echo get_permalink($post_id); ?>"></a>
</div>