<?php
/**
 * @Marquee Plugin
 */
/*
Plugin Name: Marquee Plugin (Ahmed)
Plugin URI: ahmedctg.website
Description: This is s marquee plugin for text animation..
Version: 1.0
Author: Ahmed sohel
Author URI: ahmedctg.website
License: GPLv2 or later
Text Domain: Marquee Plugin
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
?>

    <style>
        .marQueeWrapper{
            margin: 0 auto;
            display: block;
            position: relative;
            z-index: 9999;
        }
        .site-inner.marQueeWrapper {
            background: #000;
            height: 69px;
        }
        .marQueeWrapper::after {
            position: absolute;
            top: 1px;
            left: 0;
            content: "Breaking News";
            background-color: #000;
            color: #fff;
            width: 155px;
            height: 68px;
            z-index: 9999;
            padding: 12px 11px;
            font-size: 18px;
        }
    </style>

<?php
    function ahmed_marquee_text(){
        echo '
             <div class="site-inner marQueeWrapper">
                <marquee scrollamount=2 onmouseover="stop" style="color: #fff;text-align: center;padding: 5px; margin-top: 10px">
                    This is a Marquee Test Plugin. and developed by Ahmed ullah 
                </marquee>
            </div>
        ';
    }


    add_action('wp_head','ahmed_marquee_text');

