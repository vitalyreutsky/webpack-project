<?php $placeholder = $args['placeholder'];
$width_input = $args['width_input'];
if ($width_input == '50%') {
    $width_input = 'col-6';
} else {
    $width_input = 'col-12';
}
?>

<div class="form-item field-text <?php echo $width_input; ?>">

    <input type="text" name="Text" id="contact-us-text" class="field" data-placeholder="<?php echo $placeholder;?>">
    <label class="field-label" for="contact-us-text">
        <?php echo $placeholder;?><span class="required">*</span>
    </label>

    <span class="error-message"></span>
</div>
