<?php $placeholder = $args['placeholder'];
$width_input = $args['width_input'];
if ($width_input == '50%') {
    $width_input = 'col-6';
} else {
    $width_input = 'col-12';
} ?>

<div class="form-item field-message <?php echo $width_input; ?>">

    <textarea id="contact-us-message" name="Message" class="field" data-placeholder="<?php echo $placeholder;?>"></textarea>
    <label class="field-label" for="contact-us-message">
        <?php echo $placeholder; ?><span class="required">*</span>
    </label>

    <span class="error-message"></span>
</div>