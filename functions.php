<?php

function mon_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menu('header','haut de page');
}

function mon_theme_script_and_links()
{
    wp_register_style('font-awesome','/wp-content/themes/test/css/all.css');
    wp_register_style('mainStyle','/wp-content/themes/test/css/style.css');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('mainStyle');
    
}

function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

add_filter('nav_menu_submenu_css_class',function (){

    var_dump(func_get_args());die();
    // return '<a>';
});
do_action('wp_enqueue_scripts',mon_theme_script_and_links());
do_action('after_setup_theme',mon_theme_support());