<?php $title = get_field('title');
$description = get_field('description');
$faq = get_field('faq'); ?>

<section class="faq" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <?php if ($title) : ?>
            <h2 class="faq__title"><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if ($description) : ?>
            <p class="faq__desc"><?php echo $description; ?></p>
        <?php endif; ?>
        <div class="faq__list">
            <?php foreach ($faq as $faq_elem) :
                $question = $faq_elem['question'];
                $answer = $faq_elem['answer']; ?>
                <div class="faq__elem wrapper-white">
                    <h5 class="faq__question active"><?php echo $question; ?></h5>
                    <div class="faq__answer active"><?php echo $answer; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
