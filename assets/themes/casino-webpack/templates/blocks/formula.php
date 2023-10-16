<?php $content_text = get_field('content_text');
$winnings_value = get_field('winnings_value');
$betting_figures_value = get_field('betting_figures_value'); ?>
<section class="formula">
    <div class="wrapper">
        <div class="formula__text">
            <?php echo $content_text; ?>
        </div>

        <div class="formula__wrapper">
            <div class="formula__calculator">
                <div class="formula__heading">
                    <div class="formula__elem">
                        <div class="formula__value active first_click first_value"><?php echo $winnings_value; ?></div>
                        <div class="formula__label">Vincite</div>
                    </div>
                    <div class="formula__separator">÷</div>
                    <div class="formula__elem">
                        <div class="formula__value first_click second_value"><?php echo $betting_figures_value; ?></div>
                        <div class="formula__label">Cifre delle scommesse</div>
                    </div>
                    <div class="formula__result">
                        <div class="formula__result_label">= </div>
                        <div class="formula__result_value"><?php echo round(($winnings_value/$betting_figures_value), 2)?></div>
                    </div>
                </div>

                <div class="formula__btns">
                    <div class="formula__btn" data-value="7"><span>7</span></div>
                    <div class="formula__btn" data-value="8"><span>8</span></div>
                    <div class="formula__btn" data-value="9"><span>9</span></div>

                    <div class="formula__btn" data-value="4"><span>4</span></div>
                    <div class="formula__btn" data-value="5"><span>5</span></div>
                    <div class="formula__btn" data-value="6"><span>6</span></div>

                    <div class="formula__btn" data-value="1"><span>1</span></div>
                    <div class="formula__btn" data-value="2"><span>2</span></div>
                    <div class="formula__btn" data-value="3"><span>3</span></div>

                    <div class="formula__btn" data-value="C"><span>С</span></div>
                    <div class="formula__btn" data-value="0"><span>0</span></div>
                    <div class="formula__btn finish" data-value="="><span>=</span></div>
                </div>
            </div>
        </div>
    </div>
</section>