<?php
add_action('wp_enqueue_scripts', 'turistik_style');
add_action('wp_enqueue_scripts', 'turistik_scripts');
function turistik_style()
{
    wp_enqueue_style('libs-min', get_template_directory_uri() . '/assets/css/libs.min.css');
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_style('add', get_template_directory_uri() . '/assets/css/media.css');

}

function turistik_scripts()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}

add_theme_support('post-thumbnails');

add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
    register_nav_menu('Главное меню', 'Главное меню');
}

add_filter('nav_menu_css_class', 'change_menu_item_css_classes', 10, 4);

function change_menu_item_css_classes()
{
    $classes = ['nav-list__nav-item'];
    return $classes;
}

add_action('init', 'my_custom_init_news');
function my_custom_init_news()
{
    register_post_type('news', array(
        'labels' => array(
            'name' => 'Новости', // Основное название типа записи
            'singular_name' => 'Новость', // отдельное название записи типа Book
            'add_new' => 'Добавить новую',
            'add_new_item' => 'Добавить новость',
            'edit_item' => 'Редактировать новость',
            'new_item' => 'Последняя новость',
            'view_item' => 'Посмотреть новость',
            'search_items' => 'Найти новость',
            'not_found' => 'Новостей не найдено',
            'parent_item_colon' => '',
            'menu_name' => 'Новости'

        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies' => array('post_tag'),
    ));
}

add_action('init', 'my_custom_init_promotions');
function my_custom_init_promotions()
{
    register_post_type('promotions', array(
        'labels' => array(
            'name' => 'Акции', // Основное название типа записи
            'singular_name' => 'Акция', // отдельное название записи типа Book
            'add_new' => 'Добавить новую',
            'add_new_item' => 'Добавить акцию',
            'edit_item' => 'Редактировать акцию',
            'new_item' => 'Последняя акция',
            'view_item' => 'Посмотреть акция',
            'search_items' => 'Найти акцию',
            'not_found' => 'Акций не найдено',
            'parent_item_colon' => '',
            'menu_name' => 'Акции'

        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies' => array('post_tag', 'category')
    ));
}

function true_register_wp_sidebars()
{

    register_sidebar(
        array(
            'id' => 'true_side',
            'name' => 'Боковая колонка',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '<div class="sidebar-item__content">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
}

add_action('widgets_init', 'true_register_wp_sidebars');