<?php
/**
 * @Recent Post Plugin
 */
/*
Plugin Name:Recent Post Plugin (Ahmed)
Plugin URI: ahmedctg.website
Description: This plugin will show your all recent post automatically..
Version: 1.0
Author: Ahmed sohel
Author URI: ahmedctg.website
License: GPLv2 or later
Text Domain:  Recent post Plugin
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

function recent_post_plugin(){ ?>

    <style>
        .photoGallery {
            width: 300px;
            border: 1px solid #ddd;
            /* height: 300px; */
            border-radius: 5px;
            padding: 0 8px;
        }

        .photoGallery ul{
            margin: 0;
            padding: 0;
            /*list-style-type: none;*/
        }

        .photoGallery a {
            color: #fff;
            /* padding: 5px; */
        }

        .photoGallery ul li a{
            color: #fff!important;
        }

        .photoGallery ul li {
            /*float: left;*/
            width: 89px;
            background: red;
            margin: 2px 5px;
            height: 71px;
        }
    </style>



    <?php if (have_posts()) : ?>
        <ul>
            <div class="photoGallery">
                <h2 style="color:#fff">Recent Posts</h2> <hr/>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    $args = array( 'numberposts' => '5' );
                    $recent_posts = wp_get_recent_posts( $args );

                    foreach( $recent_posts as $recent ) {
                        printf( '<li><a href="%1$s">%2$s</a></li>',
                            esc_url( get_permalink( $recent['ID'] ) ),
                            apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
                        );
                    }
                    ?>
                <?php endwhile; ?>
            </div>
        </ul>
    <?php endif; ?>



    <?php

}

add_action('wp_footer','recent_post_plugin');