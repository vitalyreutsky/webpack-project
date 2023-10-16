<?php $placeholder = $args['placeholder'];
$width_input = $args['width_input'];
if ($width_input == '50%') {
    $width_input = 'col-6';
} else {
    $width_input = 'col-12';
} ?>

<div class="form-item field-emailAddress <?php echo $width_input; ?>">

    <input type="email" name="emailAddress" id="contact-us-email" class="field" data-placeholder="<?php echo $placeholder;?>">
    <label class="field-label" for="contact-us-email">
        <?php echo $placeholder;?><span class="required">*</span>
    </label>

    <span class="error-message"></span>
</div>