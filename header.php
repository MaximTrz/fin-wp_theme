<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?php echo wp_get_document_title() ?></title>
    <?php wp_head() ?>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="format-detection" content="telephone=no"/>
</head>
<body>
<div class="layout">
    <header class="layout__header">
        <div class="header">
            <a class="header__title" href="#">Управление финансов и экономики администрации Кунгурского муниципального Округа Пермского края</a>
            <a class="header__logo-link" href="#"><img class="header__logo"src="<?php echo get_template_directory_uri(); ?>/img/gerb.png" alt="Герб"/></a>
            <div class="header__burger"><a class="burger-btn" href="#"><span class="burger-btn__line"></span></a></div>
        </div>
    </header>
    <nav class="layout__main-nav">
        <nav class="header-nav --hide">

                <?php
                wp_nav_menu([
                    'theme_location' => 'main-menu',
                    'menu_class' => 'header-nav',
                    'container' => false,
                    'items_wrap' => '<ul class="header-nav__list">%3$s</ul>',
                ]);
                ?>

        </nav>
    </nav>