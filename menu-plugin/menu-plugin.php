<?php
/**
 * @Menu Plugin
 */
/*
Plugin Name: Menu Plugin (Ahmed)
Plugin URI: ahmedctg.website
Description: Your can add menu in anywhere in your website using this menu plugin. To get menu at first assign menu from Appearance->Menu selecting  'Ahmed Plugin Menu'  after that add [Ahmed_Menu] this short code where yor want add your menu.Your can use anywhere like post, page etc...
Version: 1.0
Author: Ahmed sohel
Author URI: ahmedctg.website
License: GPLv2 or later
Text Domain:  Menu Short code Plugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 1
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software

Copyright 2020 Ahmed Sohel.
*/



//register menu
function ahmed_custom_new_menu() {
    register_nav_menus(
        array(
            'ahmed_main_plugin_menu' => __( 'Ahmed Plugin Menu' ),
        )
    );
}

add_action( 'init', 'ahmed_custom_new_menu' );

//--------------------------------------------------



//--------------------------------------------------
//--------------------------------------------------
//register shortcode fro menu
function ahmed_menu_shortcode($attr,$content= null)
{
    return wp_nav_menu(
        array(
            'theme_location' => 'ahmed_main_plugin_menu',
            'menu_class' => 'ahmed-plugin-menu',
        )
    );
}

//initialize ahmed_social_shortcode function
function ahmed_menu_init(){
    add_shortcode('Ahmed_Menu','ahmed_menu_shortcode');
}

add_action('init','ahmed_menu_init');
//--------------------------------------------------
//--------------------------------------------------





//-------------------------------------------------------------------------------------------------------
function menu_css_and_js_init() {
    wp_enqueue_style('style-css',plugins_url('assets/css/style.css',__FILE__));

    wp_enqueue_script('ahmed-portfolio-js',plugins_url('assets/js/menu-shortcode.js',__FILE__));
}

add_action('wp_enqueue_scripts','menu_css_and_js_init');
//-------------------------------------------------------------------------------------------------------