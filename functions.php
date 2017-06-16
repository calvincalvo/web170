<?php

/*

Theme Name: Wordpress Spring 2017 Section 02 Demo
Author: calvin calvo
Author URI: http://calvincodes.com
Description: This is the demo theme for the WEB170 section 02 class foor Spring 2017 Quarter.
Version: 1.0

*/
// register sidebar sidenav
register_sidebar(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));
//register Navigation Menu
register_nav_menus(array('main-menu' => __('Main Menu'))); //slug pass through

add_theme_support('post-thumbnails' );
add_post_type_support('page', 'excerpt' );
?>
