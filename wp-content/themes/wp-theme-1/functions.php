<?php

function nawelgrn_theme_support()
{
    //Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}



function nawelgrn_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('nawelgrn-style', get_template_directory_uri() . '/style.css', array('nawelgrn-bootstrap-style'), $version, 'all');
    wp_enqueue_style('nawelgrn-bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css', array(), '5.2.2', 'all');
    wp_enqueue_style('nawelgrn-fontawesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css', array(), 'v5.15.4', 'all');
}


function nawelgrn_register_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('nawelgrn-script', get_template_directory_uri() . '/main.js', array(), $version, true);
    wp_enqueue_script('nawelgrn-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', array(), '5.2.2', true);
}

function nawelgrn_menus()
{
    $location = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($location);
}

function nawelgrn_widget_areas()
{
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
        ),
        array(
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'sidebar widget area'
        )
    );
}




add_action('wp_enqueue_scripts', 'nawelgrn_register_styles');
add_action('wp_enqueue_scripts', 'nawelgrn_register_scripts');
add_action('after_setup_theme', 'nawelgrn_theme_support');
add_action('init', 'nawelgrn_menus');
add_action('widgets_init', 'nawelgrn_widget_areas');
