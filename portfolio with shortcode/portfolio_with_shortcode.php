<?php
/**
 * @Portfoio Plugin
 */
/*
Plugin Name:Portfolio Plugin (Ahmed)
Plugin URI: ahmedctg.website
Description: Your can add add portfolio for your website using short code. short code will be like  :
Version: 1.0
Author: Ahmed sohel
Author URI: ahmedctg.website
License: GPLv2 or later
Text Domain:  Portfolio Short code Plugin
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



function ahmed_portfolio_shortcode(){
    return 'yes.........';
}

add_action('init','ahmed_portfolio_shortcode');




//-------------------------------------------------------------------------------------------------------
function css_and_js_init() {
    wp_enqueue_style('style-css',plugins_url('assets/css/style.css',__FILE__));

    wp_enqueue_script('ahmed-portfolio-js',plugins_url('assets/js/ahmed-portfolio-js.js',__FILE__));
}

add_action('wp_enqueue_scripts','css_and_js_init');
//-------------------------------------------------------------------------------------------------------