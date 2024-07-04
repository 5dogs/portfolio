<?php
function my_theme_setup() {
    // タイトルタグをサポート
    add_theme_support('title-tag');

    // サムネイル画像をサポート
    add_theme_support('post-thumbnails');

    // メニューをサポート
    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

// ウィジェットエリアの登録
function my_theme_widgets_init() {
    register_sidebar(array(
        'name'          => 'サイドバー',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');
