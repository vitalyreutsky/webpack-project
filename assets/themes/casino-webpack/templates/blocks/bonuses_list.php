<?php $bonuses_list = get_field('bonuses_list');
$use_filter = get_field('use_filter');
$use_for_new_casino = get_field('use_for_new_casino');
$first_card_option = get_field('first_card_option');
$use_other_filters_tags = get_field('use_other_filters_tags');
$use_rating_filter = get_field('use_rating_filter'); ?>

<section class="bonuses-list <?php if ($use_for_new_casino) echo 'new'?>" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper <?php if  ($use_rating_filter || $use_other_filters_tags) echo 'full-filter'; ?>">
        <?php if ($use_filter) :
            $use_in_filter_type_bonus = get_field('use_in_filter_type_bonus');
            $filter_type_repeater = get_field('filter_type_repeater');
            $rating_filter = get_field('rating_filter');
            $others_filters = get_field('others_filters');
            ?>
            <div class="bonuses-list__filters">
                <?php if ($use_in_filter_type_bonus && $filter_type_repeater) : ?>
                    <div class="bonuses-list__filter filter-type">
                        <?php foreach ($filter_type_repeater as $filter_type) :
                            $filter_type_select = $filter_type['filter_type_select'];
                            $filter_type_icon_active = $filter_type['filter_type_icon_active'];
                            $filter_type_icon_disable = $filter_type['filter_type_icon_disable'];
                            $filter_type_title = $filter_type['filter_type_title']; ?>
                            <div class="bonuses-list__filter-elem" data-type="type" data-value="<?php echo $filter_type_select; ?>">
                                <div class="bonuses-list__filter-elem_icon active">
                                    <?php echo wp_get_attachment_image($filter_type_icon_active, 'full'); ?>
                                </div>
                                <div class="bonuses-list__filter-elem_icon disable">
                                    <?php echo wp_get_attachment_image($filter_type_icon_disable, 'full'); ?>
                                </div>
                                <p class="bonuses-list__filter-elem_title"><?php echo $filter_type_title; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if ($use_rating_filter || $use_other_filters_tags) : ?>
                    <div class="bonuses-list__filter filter-tags">
                        <?php if ($use_rating_filter) :
                            $active_icon = $rating_filter['active_icon'];
                            $disable_icon = $rating_filter['disable_icon']; ?>
                            <div class="bonuses-list__filter-elem select-custom rating" data-type="rating" data-value="null">
                                <div class="custom-select__selected">
                                    <div class="custom-select__icon active">
                                        <?php echo wp_get_attachment_image($active_icon, 'full'); ?>
                                    </div>
                                    <div class="custom-select__icon disable">
                                        <?php echo wp_get_attachment_image($disable_icon, 'full'); ?>
                                    </div>
                                    <p class="custom-select__title">Rating</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                                        <rect x="1.41699" y="15.0713" width="2.0041" height="10.0032" transform="rotate(-135 1.41699 15.0713)" fill="#222222"/>
                                        <rect x="0.00683594" y="2.34473" width="2.00175" height="9.99613" transform="rotate(-45 0.00683594 2.34473)" fill="#222222"/>
                                    </svg>
                                </div>
                                <div class="custom-select__options">
                                    <div class="custom-select__options_list">
                                        <div class="custom-select__elem active" data-value="null">
                                            <span class="custom-select__elem_name">Non importa</span>
                                        </div>
                                        <div class="custom-select__elem" data-value="5">
                                            <span class="custom-select__elem_name">5,0</span>
                                        </div>
                                        <div class="custom-select__elem" data-value="4">
                                            <span class="custom-select__elem_name">4,0 e oltre</span>
                                        </div>
                                        <div class="custom-select__elem" data-value="3">
                                            <span class="custom-select__elem_name">3,0 e oltre</span>
                                        </div>
                                        <div class="custom-select__elem" data-value="2">
                                            <span class="custom-select__elem_name">2,0 e oltre</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($use_other_filters_tags) :
                            $others_title = $others_filters['title'];
                            $others_active_icon = $others_filters['active_icon'];
                            $others_disable_icon = $others_filters['disable_icon'];
                            $others_filters_repeater = $others_filters['others_filters_repeater']; ?>
                            <div class="bonuses-list__filter-elem select-custom tags" data-type="tags" data-value="null">
                                <div class="custom-select__selected">
                                    <div class="custom-select__icon active">
                                        <?php echo wp_get_attachment_image($others_active_icon, 'full'); ?>
                                    </div>
                                    <div class="custom-select__icon disable">
                                        <?php echo wp_get_attachment_image($others_disable_icon, 'full'); ?>
                                    </div>
                                    <p class="custom-select__title" data-placeholder="<?php echo $others_title; ?>"><?php echo $others_title; ?></p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                                        <rect x="1.41699" y="15.0713" width="2.0041" height="10.0032" transform="rotate(-135 1.41699 15.0713)" fill="#222222"/>
                                        <rect x="0.00683594" y="2.34473" width="2.00175" height="9.99613" transform="rotate(-45 0.00683594 2.34473)" fill="#222222"/>
                                    </svg>
                                </div>
                                <div class="custom-select__options">
                                    <div class="custom-select__options_list">
                                        <div class="custom-select__elem active" data-value="null">
                                            <span class="custom-select__elem_name">Non importa</span>
                                        </div>

                                        <?php foreach ($others_filters_repeater as $elem_filt) :
                                            $select_tags = $elem_filt['select_tags'];
                                            $name_filter = $elem_filt['name_filter']; ?>
                                            <div class="custom-select__elem" data-value="<?php echo $select_tags; ?>">
                                                <span class="custom-select__elem_name"><?php echo $name_filter; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="bonuses-list__wrapper" data-ids="<?php foreach ($bonuses_list as $bonus_id) { echo $bonus_id . ' ';} ?>">
            <?php foreach ($bonuses_list as $ind => $bonus_id) {
                if ($use_for_new_casino) {
                    $title = $first_card_option['title'];
                    $background_image = $first_card_option['background_image'];

                    if ($ind === 0) {
                        get_template_part('templates/cards/first-new-bonus-card', null, array('bonus_id' => $bonus_id, 'title' => $title, 'background_image' => $background_image));
                    } else {
                        get_template_part('templates/cards/horizontal-bonus-card', null, array('bonus_id' => $bonus_id, 'ind' => $ind ));
                    }

                } else {
                    get_template_part('templates/cards/horizontal-bonus-card', null, array('bonus_id' => $bonus_id));
                }
            } ?>
        </div>
    </div>
</section>