<?php

namespace App\Bonuses;

class Init
{
    public function __construct()
    {
        add_action('wp_ajax_filter_bonuses', [self::class, 'filter_bonuses']);
        add_action('wp_ajax_nopriv_filter_bonuses', [self::class, 'filter_bonuses']);

        add_action('wp_ajax_get_random_bonuses', [self::class, 'get_random_bonuses']);
        add_action('wp_ajax_nopriv_get_random_bonuses', [self::class, 'get_random_bonuses']);
    }

    public static function get_random_bonuses() {
        $args = [
            'post_status' => ['publish'],
            'posts_per_page' => -1,
            'post_type' => 'bonuses',
        ];

        $bonuses = get_posts($args);
        $bonuses_random_inds = array_rand($bonuses, 3);

        $bonus_random = [];

        foreach ($bonuses_random_inds as $bonuses_random_ind) {
            ob_start();
            get_template_part('templates/cards/vertical-bonus-card', null, array('bonus_id' => $bonuses[$bonuses_random_ind]->ID));
            $bonus_random[] = ob_get_clean();
        }

        $return = ['bonuses' => $bonus_random];
        wp_send_json($return);
    }

    public static function filter_bonuses() {
        $type = $_POST['type'];
        $standart_ids = $_POST['standart_ids'];
        $rating = $_POST['rating'];
        $tags = $_POST['tags'];

        if ($type || ($rating && $rating !== 'null') || ($tags && $tags !== 'null')) {

            if ($type) {
                $meta_query = [
                    'relation' => 'AND',
                    [
                        'key' => 'type',
                        'value' => $type,
                        'compare' => '=',
                    ],
                ];

                $args = [
                    'post_status' => ['publish'],
                    'posts_per_page' => -1,
                    'post_type' => 'bonuses',
                    'meta_query' => $meta_query
                ];
            } else {
                $args = [
                    'post_status' => ['publish'],
                    'posts_per_page' => -1,
                    'post_type' => 'bonuses',
                ];
            }
            $bonuses = get_posts($args);


            if (($tags && $tags !== 'null') && ($rating && $rating !== 'null')) {
                $bonuses = self::search_by_tags($bonuses, $tags);
                $bonuses = self::search_by_rating($bonuses, $rating);
            } else {
                if ($tags && $tags !== 'null') {
                    $bonuses = self::search_by_tags($bonuses, $tags);
                }
                if ($rating && $rating !== 'null') {
                    $bonuses = self::search_by_rating($bonuses, $rating);
                }
            }


        } else {
            $standart_ids = explode(' ', $standart_ids);

            $args = [
                'include' => $standart_ids,
                'post__in' => $standart_ids,
                'orderby' => 'post__in',
                'post_status' => ['publish'],
                'posts_per_page' => -1,
                'post_type' => 'bonuses',
            ];

            $bonuses = get_posts($args);
        }

        ob_start();

        if (count($bonuses)) {
            foreach ($bonuses as $bonus) {
                get_template_part('templates/cards/horizontal-bonus-card', null, array('bonus_id' => $bonus->ID));
            }
        } else {
            get_template_part('templates/cards/no-cards', null);
        }

        $bonuses = ob_get_clean();

        $return = ['bonuses' => $bonuses];
        wp_send_json($return);
    }

    public static function search_by_rating($bonuses, $rating) {
        $need_bonuses = [];

        foreach ($bonuses as $bonus) {
            $casino_id = get_field('select_casino', $bonus);
            $rating_cas = get_field('rating', $casino_id);

            if ((int) $rating <= $rating_cas) {
                $need_bonuses[] = $bonus;
            }
        }

        return $need_bonuses;
    }

    public static function search_by_tags($bonuses, $tags) {
        $need_bonuses = [];
        foreach ($bonuses as $bonus) {
            $tags_bonus = get_field('tags', $bonus);

            foreach ($tags_bonus as $tag_bonus) {
                if ($tag_bonus == $tags) {
                    $need_bonuses[] = $bonus;
                }
            }
        }

        return $need_bonuses;
    }

}