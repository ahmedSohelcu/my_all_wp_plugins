<?php
/**
 * @Marquee Plugin
 */
/*
Plugin Name: Modify Content Plugin (Ahmed)
Plugin URI: ahmedctg.website
Description: This is modify content plugin. This will revert the default post title and change the content style. To test at first add some demo post as well as post excerpt.
Version: 1.0
Author: Ahmed sohel
Author URI: ahmedctg.website
License: GPLv2 or later
Text Domain:  Modify Content
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
defined( 'ABSPATH' ) or die( 'Keep Silent' );

wp_enqueue_style('ahmed-style-css',plugins_url('css/style.css',__FILE__));

function ahmed_modify_title($title){
    return strrev($title);
}

add_filter('the_title','ahmed_modify_title');

//--------------------------------------------



//--------------------------------------------

function ahmed_modify_content($content){
    return $content;
}

add_filter('the_content','ahmed_modify_content');

//--------------------------------------------