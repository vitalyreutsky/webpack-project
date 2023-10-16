<?php $inputs = get_field('inputs');
$success_message = get_field('success_message'); ?>

<section class="form" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <form class="form__body">
            <div class="form__wrapper">
                <?php foreach ($inputs as $input) :
                    $placeholder = $input['placeholder'];
                    $type_input  = $input['type_input'];
                    $width_input = $input['width_input'];
                    if ($type_input == 'text') {
                        get_template_part('templates/elements/inputs/input-text', null, array(
                            'placeholder' => $placeholder,
                            'width_input' => $width_input,
                        ));
                    } elseif ($type_input == 'email') {
                        get_template_part('templates/elements/inputs/input-email', null, array(
                            'placeholder' => $placeholder,
                            'width_input' => $width_input,
                        ));
                    } elseif ($type_input == 'textarea') {
                        get_template_part('templates/elements/inputs/input-textarea', null, array(
                            'placeholder' => $placeholder,
                            'width_input' => $width_input,
                        ));
                    } elseif ($type_input == 'submit') {
                        get_template_part('templates/elements/inputs/input-submit', null, array(
                            'placeholder' => $placeholder,
                        ));
                    }
                endforeach; ?>
            </div>

            <div class="success-message">
                <div class="success-message__text">
                    <?php echo $success_message;?>
                </div>
                <button class="success-message__btn btn">Inviare un altro messaggio</button>
            </div>
        </form>
    </div>
</section>
