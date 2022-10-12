<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/bootstrap_ekspres.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style_blocks.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/js/aos/aos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;500;700&display=swap" rel="stylesheet">

    <script src="<?= get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/aos/aos.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2Q681PMH82"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-2Q681PMH82');
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'exist'); ?></a>
        <header id="masthead" class="site-header">

            <div class="container header">
                <div class="header__logo order-1">

                    <a href="<?= site_url(); ?>">Exist<span>agency</span></a>

                    <?php // require("partials/hamburger.php");
                        ?>
                </div>
                <div class="header__menu order-3 order-md-2">
                    <?php require("partials/menu-standard.php"); ?>
                </div>
                <div class="header__button order-2 order-md-3">
                    <div class="header__button--first">
                        <a href="https://existagency.pl/wycena/">Bezpłatna wycena</a>
                    </div>

                </div>

            </div>

        </header>
    </div>
    <div id="content" class="site-content">