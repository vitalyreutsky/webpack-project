<?php

namespace App\Seo;

final class Init {
    public function __construct() {
        // add_filter( 'locale', function() {
        //     return 'it_IT';
        // });
        add_filter( 'wpseo_locale', [ self::class, 'change_og_locale' ] );
        remove_action( 'wp_head', 'wp_generator' );
        add_filter( 'wpseo_json_ld_output', '__return_false' );
        add_filter( 'wpseo_debug_markers', '__return_false' );
        add_action('wp_head', [ self::class, 'remove_comments_yoast' ], ~PHP_INT_MAX );
        add_filter( 'w3tc_can_print_comment', [ self::class, 'remove_comments_w3tc' ], 10, 1 );

        if (!is_user_logged_in()) {
            remove_action('rest_api_init', 'wp_oembed_register_route');
            remove_action('template_redirect', 'rest_output_link_header', 11);
            remove_action('wp_head', 'rest_output_link_wp_head', 10);
            remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
            remove_action('wp_head', 'wp_oembed_add_discovery_links');
            remove_action('wp_head', 'rsd_link');
            remove_action('wp_head', 'wp_shortlink_wp_head', 10);
        }
    }

    public static function change_og_locale( $locale ) {
        return 'it_IT';
    }

    public static function remove_comments_yoast() {
        ob_start(function($o) {
            return preg_replace('/\n?<.*?Yoast SEO plugin.*?>/mi','',$o);
        });
    }

    public static function remove_comments_w3tc ( $w3tc_setting )
    {
        return false;
    }
}