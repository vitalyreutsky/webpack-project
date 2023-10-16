<?php

namespace App\CustomPostType;

class RegisterCustomPostType
{
    public function __construct()
    {
        add_action( 'init', [self::class, 'registerCasinoPageType']);
        add_action( 'init', [self::class, 'registerSlotPageType']);
        add_action( 'init', [self::class, 'registerCasinosType']);
        add_action( 'init', [self::class, 'registerBonusesType']);
        add_action( 'init', [self::class, 'registerSlotsType']);
        add_action( 'init', [self::class, 'registerExpertsType']);
    }

    public static function registerCasinoPageType(): void
    {
        register_post_type('casino_page', array(
            'labels' => array(
                'name' => 'Casino Pages',
                'singular_name' => 'Casino Page',
                'add_new' => 'Add new',
                'add_new_item' => 'Add new Casino Page',
                'edit_item' => 'Edit Casino Page',
                'new_item' => 'New Casino Page',
                'view_item' => 'View Casino Page',
                'search_items' => 'Search Casino Page',
                'not_found' => 'Casino Page not found',
                'not_found_in_trash' => 'Not found Casino Page in trash',
                'parent_item_colon' => '',
                'menu_name' => 'Casino Pages'
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'show_in_rest' => true,
            'menu_icon'     => 'dashicons-money-alt',
            'supports' => array('title', 'editor', 'author')
        ));
    }

    public static function registerSlotPageType(): void
    {
        register_post_type('slot_page', array(
            'labels' => array(
                'name' => 'Slot Pages',
                'singular_name' => 'Slot Page',
                'add_new' => 'Add new',
                'add_new_item' => 'Add new Slot Page',
                'edit_item' => 'Edit Slot Page',
                'new_item' => 'New Slot Page',
                'view_item' => 'View Slot Page',
                'search_items' => 'Search Slot Page',
                'not_found' => 'Slot Page not found',
                'not_found_in_trash' => 'Not found Slot Page in trash',
                'parent_item_colon' => '',
                'menu_name' => 'Slot Pages'
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'show_in_rest' => true,
            'menu_icon'     => 'dashicons-money-alt',
            'supports' => array('title', 'editor', 'author')
        ));
    }

    public static function registerCasinosType(): void
    {
        register_post_type('casinos', array(
            'labels' => array(
                'name' => 'Casinos',
                'singular_name' => 'Casino',
                'add_new' => 'Add new',
                'add_new_item' => 'Add new Casino',
                'edit_item' => 'Edit Casino',
                'new_item' => 'New Casino',
                'view_item' => 'View Casino',
                'search_items' => 'Search Casino',
                'not_found' => 'Casino not found',
                'not_found_in_trash' => 'Not found Casino in trash',
                'parent_item_colon' => '',
                'menu_name' => 'Casinos'
            ),
            'public' => false,
            'publicly_queryable' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'show_in_rest' => false,
            'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none"><g clip-path="url(#clip0_725_74846)"><path d="M10.9997 0C4.92407 0 0 4.92407 0 10.9997C0 17.0753 4.92407 21.9993 10.9997 21.9993C17.0753 21.9993 21.9993 17.0753 21.9993 10.9997C21.9993 4.92407 17.0753 0 10.9997 0ZM10.9997 1.09997C11.3821 1.09997 11.7602 1.12575 12.134 1.16872L11.8934 3.36865C11.6055 3.33428 11.3004 3.2999 10.9997 3.2999C10.6688 3.2999 10.3552 3.32998 10.0372 3.36865L9.76221 1.20309C10.1704 1.15153 10.5743 1.09997 10.9997 1.09997V1.09997ZM14.4371 1.7187C15.189 1.99799 15.9152 2.37181 16.5683 2.81867L15.3308 4.64049C14.8238 4.29245 14.2652 4.00027 13.6808 3.78114L14.4371 1.7187ZM7.45915 1.75307L8.24976 3.81551C7.6654 4.03894 7.10252 4.32253 6.5998 4.67486L5.32797 2.88742C5.97678 2.43626 6.70722 2.04096 7.45915 1.75308V1.75307ZM10.9997 4.39987C14.6433 4.39987 17.5995 7.35603 17.5995 10.9997C17.5995 14.6433 14.6433 17.5995 10.9997 17.5995C7.35603 17.5995 4.39987 14.6433 4.39987 10.9997C4.39987 7.35603 7.35603 4.39987 10.9997 4.39987ZM18.3557 4.39987C18.8842 4.98852 19.3526 5.62015 19.7307 6.32481L17.8057 7.39041C17.5135 6.84042 17.1182 6.33771 16.7058 5.87795L18.3557 4.39987ZM3.57489 4.46862L5.22485 5.91233C4.81665 6.37638 4.44713 6.90487 4.15925 7.45916L2.23431 6.42794C2.60383 5.71897 3.05069 5.06587 3.57489 4.46862V4.46862ZM8.66224 7.56228C8.37866 7.56228 8.12085 7.69118 7.90602 7.90602C7.47634 8.33569 7.47634 9.02317 7.90602 9.45285L9.45285 10.9997L7.90602 12.5465C7.47634 12.9762 7.47634 13.6637 7.90602 14.0933C8.33569 14.523 9.02317 14.523 9.45285 14.0933L10.9997 12.5465L12.5465 14.0933C12.9762 14.523 13.6637 14.523 14.0933 14.0933C14.523 13.6637 14.523 12.9762 14.0933 12.5465L12.5465 10.9997L14.0933 9.45285C14.523 9.02318 14.523 8.3357 14.0933 7.90602C13.6637 7.47635 12.9762 7.47635 12.5465 7.90602L10.9997 9.45285L9.45285 7.90603C9.23802 7.69119 8.94584 7.56229 8.66225 7.56229L8.66224 7.56228ZM20.59 8.55912C20.7834 9.32395 20.8951 10.1403 20.8994 10.9653L20.6588 10.9309L18.6994 10.9997C18.6994 10.3466 18.6135 9.71495 18.4588 9.10911L20.59 8.55912ZM1.37496 8.66224L3.50615 9.17785C3.36435 9.75792 3.2999 10.3766 3.2999 10.9997C3.2999 11.0083 3.2999 11.0255 3.2999 11.034H1.09997C1.09997 11.0212 1.09997 11.0126 1.09997 10.9997C1.09997 10.1962 1.1945 9.40988 1.37496 8.66224H1.37496ZM3.54052 12.8559C3.69091 13.466 3.90574 14.0676 4.19363 14.6089L2.23431 15.6402C1.86479 14.9441 1.60698 14.1879 1.40933 13.4059L3.54052 12.8559ZM18.4588 12.8559L20.59 13.3715C20.3967 14.1578 20.1346 14.9054 19.765 15.6058L17.8057 14.5746C18.0893 14.0332 18.3084 13.466 18.4588 12.8559H18.4588ZM16.7745 16.087L18.3901 17.5651C17.8616 18.1624 17.2944 18.6909 16.637 19.1463L15.3652 17.3245C15.8765 16.9722 16.3663 16.5511 16.7745 16.087H16.7745ZM5.25922 16.1214C5.67171 16.5854 6.12287 17.0065 6.63418 17.3589L5.39672 19.1463C4.73931 18.6952 4.13777 18.1581 3.60927 17.5651L5.25922 16.1214ZM8.28413 18.1838C8.8556 18.3987 9.47863 18.5577 10.106 18.6307L9.83096 20.8306C9.02317 20.7361 8.26264 20.5256 7.5279 20.2463L8.28413 18.1838ZM13.7496 18.1838L14.5058 20.2463C13.7711 20.5256 13.0106 20.7318 12.2028 20.8306L11.9278 18.6307C12.5508 18.5534 13.1781 18.3987 13.7496 18.1838H13.7496Z" fill="#222222"/></g><defs><clipPath id="clip0_725_74846"><rect width="22" height="22" fill="white"/></clipPath></defs></svg>'),
            'supports' => array('title', 'thumbnail', 'editor', 'author')
        ));
    }

    public static function registerBonusesType(): void
    {
        register_post_type('bonuses', array(
            'labels' => array(
                'name' => 'Bonuses',
                'singular_name' => 'Bonus',
                'add_new' => 'Add new',
                'add_new_item' => 'Add new Bonus',
                'edit_item' => 'Edit Bonus',
                'new_item' => 'New Bonus',
                'view_item' => 'View Bonus',
                'search_items' => 'Search Bonus',
                'not_found' => 'Bonus not found',
                'not_found_in_trash' => 'Not found Bonus in trash',
                'parent_item_colon' => '',
                'menu_name' => 'Bonuses'
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'show_in_rest' => false,
            'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none"><g clip-path="url(#clip0_645_60980)"><path d="M2.7487 10.5V18.333V20.1663H4.58203H10.2312V10.5H2.7487Z" fill="#222222"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.41536 1.83301C4.90788 1.83301 3.66536 3.07552 3.66536 4.58301C3.66536 4.90527 3.7334 5.20964 3.83724 5.49968H3.66536L3.66306 5.49968H1.83203V7.33301V9.16634H20.1654V7.33301V5.49968H18.332H18.1602C18.264 5.20964 18.332 4.90527 18.332 4.58301C18.332 3.07552 17.0895 1.83301 15.582 1.83301C14.1211 1.83301 12.986 2.76042 12.0872 3.66634H9.91016C9.01139 2.76042 7.8763 1.83301 6.41536 1.83301ZM8.87891 5.21322C8.07682 4.36817 7.02051 3.66634 6.41536 3.66634C5.89616 3.66634 5.4987 4.0638 5.4987 4.58301C5.4987 5.10221 5.89616 5.49968 6.41537 5.49968H9.10807C9.05295 5.43645 9.02866 5.40111 9.00595 5.36808C8.9785 5.32816 8.95337 5.2916 8.87891 5.21322ZM16.4987 4.58301C16.4987 4.0638 16.1012 3.66634 15.582 3.66634C14.9769 3.66634 13.9206 4.36817 13.1185 5.21322C13.044 5.2916 13.0189 5.32816 12.9914 5.36808C12.9687 5.40111 12.9444 5.43645 12.8893 5.49968H15.582C16.1012 5.49968 16.4987 5.10221 16.4987 4.58301Z" fill="#222222"/><path d="M19.2487 18.333V10.5H11.7661V20.1663H17.4154H19.2487V18.333Z" fill="#222222"/></g><defs><clipPath id="clip0_645_60980"><rect width="22" height="22" fill="white"/></clipPath></defs></svg>'),
            'supports' => array('title', 'editor', 'author')
        ));
    }

    public static function registerSlotsType(): void
    {
        register_post_type('slots', array(
            'labels' => array(
                'name' => 'Slots',
                'singular_name' => 'Slot',
                'add_new' => 'Add new',
                'add_new_item' => 'Add new Slot',
                'edit_item' => 'Edit Slot',
                'new_item' => 'New Slot',
                'view_item' => 'View Slot',
                'search_items' => 'Search Slot',
                'not_found' => 'Slot not found',
                'not_found_in_trash' => 'Not found Slot in trash',
                'parent_item_colon' => '',
                'menu_name' => 'Slots'
            ),
            'public' => false,
            'publicly_queryable' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'show_in_rest' => false,
            'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none"><path d="M14.2066 0C14.2066 0 12.8512 0.757139 12.0993 2.14258C11.638 2.25755 10.3321 2.62093 8.82238 3.76473C7.097 5.07188 5.38522 7.39666 5.23909 10.976C5.11882 10.9625 4.99632 10.9505 4.86082 10.9505C3.08091 10.9505 1 12.0209 1 15.0353C1 17.7271 3.4104 20 6.26289 20C8.74697 20 11.5258 17.8769 11.5258 15.0353C11.5258 12.039 9.21645 10.9505 7.66495 10.9505C7.549 10.9505 7.44644 10.9624 7.34219 10.9721C7.4764 8.0045 8.7925 6.35294 10.1299 5.33975C10.2918 5.21711 10.4522 5.10648 10.6109 5.00393C10.1666 8.01001 11.5488 10.4464 12.9258 12.0267C13.3709 12.8621 13.6309 13.8632 13.6309 15.0236C13.6309 16.2503 13.295 17.3657 12.7161 18.3209C13.6003 18.7633 14.5884 18.9945 15.5778 18.9945C16.5672 18.9945 17.5576 18.7625 18.4313 18.2698C19.6417 17.5962 20.5244 16.3996 20.8612 15.002C21.1875 13.6144 20.9355 12.2281 20.1355 11.0919C18.304 8.46756 15.5772 8.66803 14.1983 9.44226C14.0309 9.53602 13.8891 9.63354 13.7625 9.73291C13.0861 8.74515 12.5853 7.57105 12.6071 6.15868C13.7843 7.13403 15.7132 7.0057 16.7887 6.71838C16.7887 6.71838 16.3445 4.45614 15.0351 3.40338C14.6295 3.07743 14.3245 2.86101 14.0668 2.68853C14.5022 2.20516 15.1605 1.79105 15.1605 1.79105L14.2066 0Z" fill="#222222"/></svg>'),
            'supports' => array('title', 'thumbnail', 'editor', 'author')
        ));
    }

    public static function registerExpertsType(): void
    {
        register_post_type('experts', array(
            'labels' => array(
                'name' => 'Experts',
                'singular_name' => 'Expert',
                'add_new' => 'Add new',
                'add_new_item' => 'Add new Expert',
                'edit_item' => 'Edit Expert',
                'new_item' => 'New Expert',
                'view_item' => 'View Expert',
                'search_items' => 'Search Expert',
                'not_found' => 'Expert not found',
                'not_found_in_trash' => 'Not found Expert in trash',
                'parent_item_colon' => '',
                'menu_name' => 'Experts'
            ),
            'public' => false,
            'publicly_queryable' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'show_in_rest' => false,
            'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.5078 16.6787C16.5078 16.9004 16.3253 17.084 16.1004 17.084H3.79021C3.56849 17.084 3.38281 16.9027 3.38281 16.6787C3.38281 13.0964 6.32099 10.192 9.94528 10.192C13.5696 10.192 16.5077 13.0963 16.5077 16.6787H16.5078ZM9.94535 9.38136C7.90664 9.38136 6.25419 7.74771 6.25419 5.73282C6.25419 3.71764 7.90664 2.08398 9.94535 2.08398C11.9841 2.08398 13.6365 3.71764 13.6365 5.73282C13.6365 7.74771 11.9841 9.38136 9.94535 9.38136Z" fill="#222222"/></svg>'),
            'supports' => array('title', 'thumbnail', 'editor', 'author')
        ));
    }
}