<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <?php echo App\Seo\Schema::getSchemaOrganisation(); ?>
    <?php echo App\Seo\Schema::getSchemaHowTo(); ?>
    <?php echo App\Seo\Schema::getSchemaFaq(); ?>
    <?php if (get_the_title() == 'Contatti' && get_field('recapthca_client_key', 'option')) : ?>
        <script src="https://www.google.com/recaptcha/api.js?render=<?php echo get_field('recapthca_client_key', 'option'); ?>"></script>
    <?php endif; ?>
    <style>
        .header__nav a {
            padding: 0 20px;
            white-space: nowrap;
            height: 50px;
            color: #fff;
            font-size: 16px;
            line-height: normal;
            text-transform: uppercase;
            text-align: center;
            transition: .3s;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Lato-Bold;
        }

        .header__top .wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header__subnav .wrapper ul {
            display: flex;
        }

        .header__nav a:nth-child(5) {
            margin-left: 80px;
        }

        .header__subnav .wrapper ul li a {
            display: block;
            border-radius: 35px;
            background-color: #f1f1f1;
            margin-right: 15px;
            padding: 4.5px 20px;
            color: #222;
            transition: .3s;
            font-family: FiraSans-Regular;
        }

        .header__subnav .wrapper ul li.current-menu-item a {
            border-radius: 35px;
            border: 1px solid #47b68e;
            background-color: #fff;
            color: #138d61;
        }

        a {
            color: unset;
        }

        .heading .wrapper {
            min-height: 489px;
        }

        @media (max-width: 768px) {
            .header__top .wrapper {
                justify-content: center !important;
            }

            .header__subnav .wrapper ul li a {
                padding: 5px 9px !important;
            }

            .heading .wrapper {
                min-height: auto;
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <main class="main">
        <?php get_template_part('templates/header/header'); ?>