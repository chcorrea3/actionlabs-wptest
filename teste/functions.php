<?php

function theme_setup() {
  add_theme_support('post-thumbnails');

  register_nav_menus(array(
    'primary' => 'Primary Menu',
    'footer' => 'Footer Menu'
  ));
}
add_action('after_setup_theme', 'theme_setup');

function theme_scripts() {
  wp_enqueue_style('theme-style', get_stylesheet_uri());

  wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');

function theme_widgets_init() {
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'description' => 'Add widgets here',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ));
}
add_action('widgets_init', 'theme_widgets_init');
