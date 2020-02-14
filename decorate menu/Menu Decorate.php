<?php
/**
 * @Menu Decorate Plugin
 */
/*
Plugin Name: Menu Decorate Plugin (Ahmed)
Plugin URI: ahmedctg.website
Description: This is s marquee plugin for text animation..
Version: 1.0
Author: Ahmed sohel
Author URI: ahmedctg.website
License: GPLv2 or later
Text Domain: Menu Decorate Plugin
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

?>


<!--start plugin-->
<?php

    function ahmed_decorate_menu(){

        wp_enqueue_style('style-our',plugins_url('style.css', __FILE__));

    }

    add_action('wp_head','ahmed_decorate_menu',1);


