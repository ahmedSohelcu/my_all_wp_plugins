<?php
/**
 * @Social Media Plugin with shortcode
 */
/*
Plugin Name: Social Short code Plugin (Ahmed)
Plugin URI: ahmedctg.website
Description: Your can add social media button with dynamic content,link, class and name using short code.Use shortcode like : [social name="facebook" href="https://www.facebook.com" class=" facebook "   content="Facebook "] [social name="twitter" href="https://www.twitter.com"  class="twitter"  content="Twitter"] [social name="linkedin" href="https://www.linkedin.com" class=" linkedin "  content=" Linkedin "][social  name="googleplus" href="https://www.googleplus.com" class="googleplus"  content="google plus"]
Version: 1.0
Author: Ahmed sohel
Author URI: ahmedctg.website
License: GPLv2 or later
Text Domain:  Social Shortcode Plugin
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
        .facebook {
            border: 1px solid #ddd;
            padding: 5px;
            background: #204E8A;
            color: #fff;
            border-radius: 2px;
        }
        .twitter {
            border: 1px solid #ddd;
            padding: 5px;
            background: #3399FF;
            color: #fff;
            border-radius: 2px;
        }
        .linkedin {
            border: 1px solid #ddd;
            padding: 5px;
            background: #3399FF;
            color: #fff;
            border-radius: 2px;
        }
        .googleplus {
            border: 1px solid #ddd;
            padding: 5px;
            background: #EC6327;
            color: #fff;
            border-radius: 2px;
        }
    </style>

<?php

//register dynamic social media with short code...
function ahmed_social_shortcode($attr,$content=null){
    ob_start();
    $shortcode = shortcode_atts(array(
        'name'=>'facebook',
        'target'=>'_blank',
        'href'=>'',
        'class'=>'',
        'content'=>$content,
    ),$attr);

    return '<a href="'.$shortcode['href'].'" target="'.$shortcode['target'].'" class='.$shortcode['class'].'>' . $shortcode['content'] . '</a>';

    return ob_get_clean();
}


//initialize ahmed_social_shortcode function
function social_init(){
    add_shortcode('social','ahmed_social_shortcode');
}

add_action('init','social_init');
