<?php

namespace App\Helpers;

class Init
{
    public const MONTH = [
        'Gennaio',
        'Febbraio',
        'Aarzo',
        'Aprile',
        'Maggio',
        'Giugno',
        'Luglio',
        'Agosto',
        'Settembre',
        'Ottobre',
        'Novembre',
        'Dicembre',
    ];

    public const SHORT_MONTH = [
        'gen.',
        'feb.',
        'mar.',
        'apr.',
        'mag.',
        'giu.',
        'lug.',
        'ago.',
        'set.',
        'ott.',
        'nov.',
        'dic.',
    ];

    public function __construct()
    {
        add_filter('body_class', [self::class, 'add_class_for_body']);
    }

    public static function add_class_for_body($classes) {
        if (get_the_title() == 'Giri Gratis') {
            $classes[] = 'free_spins';
        }

        if (get_post_type() != 'casino_page' && get_post_type() != 'slot_page') {
            $classes[] = 'simple-page';
        }

        return $classes;
    }

    public static function setCurrentLinkHeaderMenu($url): string {
        if ($url == '#open-casino' && get_post_type() == 'casino_page' && get_the_title() !== 'Bonus Casinò' && get_the_title() !== 'Casinò VIP') {
            return 'active';
        }
        if ($url == '#open-slots' && get_post_type() == 'slot_page') {
            return 'active';
        }
        if (get_permalink() == $url) {
            return 'active';
        }
        return '';
    }

    public static function getItalianDate($month, $day, $short = false): string {
        if ($short) {
            $month1 =  self::SHORT_MONTH[$month - 1];
        } else {
            $month1 =  self::MONTH[$month - 1];
        }
        return $day . ' ' . $month1;
    }
}