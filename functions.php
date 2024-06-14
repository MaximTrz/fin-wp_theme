<?php

    define('FIN_PATH_JS', get_template_directory_uri() .'/assets/js/');
    define('FIN_PATH_CSS', get_template_directory_uri() .'/assets/css/');


    add_action('wp_enqueue_scripts', function (){

        // Подключаем jQuery с высоким приоритетом (значение 1)
        //wp_enqueue_script('jquery', TUZ_PATH_JS.'jquery-3.7.0.min.js', array(), false, 1);

        // Подключаем стили и скрипты, которые зависят от jQuery
        wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', false);
        wp_enqueue_script('main-script', FIN_PATH_JS.'bundle.js', array('jquery'), false);
        wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', false);

        // Подключаем главные стили
        wp_enqueue_style('main-style', get_stylesheet_uri(), array(), false);
    });


    add_action( 'after_setup_theme', 'theme_register_nav_menu' );

    function theme_register_nav_menu() {
        register_nav_menu( 'main-menu', 'Главное меню' );
        register_nav_menu( 'left-sidebar', 'Левый сайдбар' );
        register_nav_menu( 'right-sidebar', 'Правый сайдбар' );
        register_nav_menu( 'footer-menu', 'Меню в подвале' );
    }

    add_filter( 'nav_menu_link_attributes', function ($atts, $menu_item, $args, $depth){

        if ($args->theme_location === 'left-sidebar'){
            $atts['class'] = 'side-bar__link';
        }

        if ($args->theme_location === 'right-sidebar'){
            $atts['class'] = 'side-bar__link';
        }

        if ($args->theme_location === 'main-menu'){
            $atts['class'] = 'header-nav__link';
        }

        if ($args->theme_location === 'footer-menu'){
            $atts['class'] = 'bottom-nav__link';
        }

        return $atts;
    }, 10, 4 );

    add_filter( 'nav_menu_submenu_css_class', function ($classes, $args, $depth){
        $classes[] = 'header-nav__sub-menu';
        return $classes;
    }, 10, 3 );

    function custom_menu_item_classes($classes, $item, $args, $depth) {
        // Check if this is the main menu location
        if ($args->theme_location === 'main-menu') {
            $classes[] = 'header-nav__item';
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'custom_menu_item_classes', 10, 4);


    function custom_footer_menu_item_classes($classes, $item, $args, $depth) {
        // Check if this is the footer menu location
        if ($args->theme_location === 'footer-menu') {
            // Add your custom class to the array of classes
            $classes[] = 'bottom-nav__item';
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'custom_footer_menu_item_classes', 10, 4);


    function custom_menu_item_output($item_output, $item, $depth, $args) {

        $has_children = ! empty( $item->classes ) && in_array( 'menu-item-has-children', $item->classes );

        if ( $has_children ) {
            $item_output = preg_replace('/<a[^>]*>(.*)<\/a>/iU', '<div class="header-nav__link">$1</div>', $item_output);
        }

        return $item_output;
    }
    add_filter('walker_nav_menu_start_el', 'custom_menu_item_output', 10, 4);


    // Добавление кнопки "Версия для слабовидящих"
    function append_custom_menu_item($items, $args) {
        if ($args->theme_location == 'main-menu') {
            // Construct the custom menu item HTML
            $custom_item = '<li class="header-nav__item">
                                    <a class="header-nav__link --visually" href="#" target="_blank">
                                        <div class="header-nav__visually-impaired">
                                          <div class="visually-impaired"></div>
                                        </div>
                                    </a>
                                </li>';

            $items .= $custom_item;
        }
        return $items;
    }
    add_filter('wp_nav_menu_items', 'append_custom_menu_item', 10, 2);