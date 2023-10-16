<?php $title = get_field('title');
$text_content = get_field('text_content');
$positions_cards = get_field('positions_cards');
$type_icon = get_field('type_icon');
$cards = get_field('cards');
$blacklist_or_whitelist = get_field('blacklist_or_whitelist');
if ($blacklist_or_whitelist) {
    $blacklist_or_whitelist = 'whitelist';
} else {
    $blacklist_or_whitelist = 'blacklist';
}
?>

<section class="blacklist-whitelist position-<?php echo $positions_cards;?> type-<?php echo $blacklist_or_whitelist;?>" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="blacklist-whitelist__wrapper wrapper-white">
            <div class="blacklist-whitelist__content">
                <?php if ($title) : ?>
                    <div class="blacklist-whitelist__title"><?php echo $title; ?></div>
                <?php endif; ?>
                <?php if ($title) : ?>
                    <div class="blacklist-whitelist__text"><?php echo $text_content; ?></div>
                <?php endif; ?>
            </div>

            <?php if ($cards) : ?>
                <div class="blacklist-whitelist__cards">
                    <?php foreach ($cards as $card) :
                        $name_casino = $card['name_casino']; ?>
                        <div class="blacklist-whitelist__card icon-<?php echo $type_icon;?>">
                            <span><?php echo $name_casino; ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
