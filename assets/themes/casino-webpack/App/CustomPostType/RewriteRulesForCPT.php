<?php

namespace App\CustomPostType;

class RewriteRulesForCPT
{

    public const TYPES = [
        'casino_page' => 'casino_page',
        'slot_page'   => 'slot_page'
    ];

    public function __construct()
    {
        add_filter( 'post_type_link', [self::class, 'remove_slug'], 10, 3 );
        add_action( 'pre_get_posts', [self::class, 'parse_request'] );
        add_action( 'template_redirect', [self::class, 'template_redirect'] );
    }

    public static function remove_slug($post_link, $post, $leavename)
    {
        $post_type = $post->post_type;

        if ( ! array_key_exists( $post_type, self::TYPES ) || 'publish' !== $post->post_status ) {
            return $post_link;
        }

        $post_link = str_replace( '/' . self::TYPES[$post_type] . '/', '/', $post_link );

        return $post_link;
    }

    public static function parse_request( $query ) {
        if ( ! $query->is_main_query() ) {
            return;
        }

        if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
            return;
        }

        if ( ! empty( $query->query['name'] ) ) {
            $array = [ 'post', 'page' ];
            $array = array_merge( $array, array_keys( self::TYPES ) );
            $query->set( 'post_type', $array );
        }
    }

    public static function template_redirect() {
        if ( is_admin() || is_preview() || ! is_singular( array_keys( self::TYPES ) ) ) {
            return;
        }
        $post_permalink = trailingslashit( get_permalink() );
        $current_url    = trailingslashit( self::get_current_url() );
        $post_slug      = get_post_field( 'post_name', get_post() );
        if ( ( $post_permalink && $current_url )
            && ( $post_permalink !== $current_url )
            && ( false !== strpos( $post_permalink, $post_slug ) && false !== strpos( $current_url, $post_slug ) )
        ) {
            wp_safe_redirect( $post_permalink, 301 );
            exit;
        }
    }


    public static function get_current_url() {
        global $wp;
        if ( $wp ) {
            return home_url( add_query_arg( [], $wp->request ) );
        }
    }
}