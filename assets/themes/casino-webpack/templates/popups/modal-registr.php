<?php $icon = get_field('modal_icon', 'option');
$title = get_field('modal_title', 'option');
$description = get_field('modal_description', 'option');
$checkbox_text = get_field('modal_checkbox_text', 'option');
$button_text = get_field('modal_button_text', 'option');
$success_title = get_field('modal_success_title', 'option');
$success_desc = get_field('modal_success_desc', 'option'); ?>

<div class="modal-registr">
    <div class="modal-registr__wrapper">
        <div class="modal-registr__close">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" fill="#F1F1F1"/>
                <rect class="hover" x="8.06006" y="7.35352" width="12.1436" height="1" transform="rotate(45 8.06006 7.35352)" fill="#9D9D9D"/>
                <rect class="hover" width="12.1436" height="1" transform="matrix(-0.707107 0.707107 0.707107 0.707107 15.9399 7.35352)" fill="#9D9D9D"/>
                <rect class="hover-light" x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#F1F1F1"/>
            </svg>
        </div>
        <?php if ($icon) : ?>
            <div class="modal-registr__image" style="background-image: url('<?php echo wp_get_attachment_url($icon)?>')"></div>
        <?php endif; ?>
        <div class="modal-registr__form">
            <?php if ($title) : ?>
                <p class="modal-registr__title"><?php echo $title;?></p>
            <?php endif; ?>
            <?php if ($description) : ?>
                <p class="modal-registr__desc"><?php echo $description;?></p>
            <?php endif; ?>

            <div class="modal-registr__email_wrapper">
                <input type="email" name="emailAddress" id="modal-registr-email" class="modal-registr__email" placeholder="Email">
                <span class="invalid-text"></span>
            </div>

            <div class="modal-registr__checkbox custom-checkbox">
                <input type="checkbox" name="register-agree" id="register-agree">
                <label for="register-agree"><?php echo $checkbox_text;?></label>
            </div>

            <button class="modal-registr__btn btn">
                <?php echo $button_text;?>
            </button>
        </div>
        <div class="modal-registr__success">
            <?php if ($success_title) : ?>
                <p class="modal-registr__title"><?php echo $success_title;?></p>
            <?php endif; ?>
            <?php if ($success_desc) : ?>
                <p class="modal-registr__desc"><?php echo $success_desc;?></p>
            <?php endif; ?>
        </div>

    </div>
</div>