<?php
/**
 * @Portfoio Plugin
 */
/*
Plugin Name:Portfolio Plugin (Ahmed)
Plugin URI: ahmedctg.website
Description: Your can add add portfolio for your website using short code. short code will be like  : [portfolio] or [portfolio perpage=2]
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

defined( 'ABSPATH' ) or die( 'Keep Silent' );

function register_ahmed_portfolio_shortcode(){

    $labels = array(
        'name'                  => _x( 'Portfolio', 'Post type general name', 'ahmedportfolioplugin' ),
        'singular_name'         => _x( 'Portfolio', 'Post type singular name', 'ahmedportfolioplugin' ),
        'menu_name'             => _x( 'Portfolio', 'Admin Menu text', 'ahmedportfolioplugin' ),
        'add_new'               => __( 'Add New', 'ahmedportfolioplugin' ),
        'add_new_item'          => __( 'Add New Portfolio', 'ahmedportfolioplugin' ),
        'new_item'              => __( 'New Portfolio', 'ahmedportfolioplugin' ),
        'edit_item'             => __( 'Edit Portfolio', 'ahmedportfolioplugin' ),
        'view_item'             => __( 'View Portfolio', 'ahmedportfolioplugin' ),
        'all_items'             => __( 'All Portfolio', 'ahmedportfolioplugin' ),
        'search_items'          => __( 'Search Portfolios', 'ahmedportfolioplugin' ),
        'not_found'             => __( 'No Portfolio found.', 'ahmedportfolioplugin' ),
        'featured_image'        => _x( 'Portfolio Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ahmedportfolioplugin' ),
        'archives'              => _x( 'Portfolio archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ahmedportfolioplugin' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'taxonomies'         => array(
                'category','post-type'
        ),
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'portfolio', $args );
}

add_action('init','register_ahmed_portfolio_shortcode');



//Register short code for portfolio
function ahmed_register_portfolio_shortcode($attr,$perpage=-1,$content=null){
    ob_start();

    $shortcode = shortcode_atts(
        array(
            'perpage'=>$perpage,
            'content'=>$content,
        ),$attr);

    $args = array(
        'post_type' =>'portfolio',
        'posts_per_page'=>$shortcode['perpage']
    );

    $post_loop = new WP_Query($args);

    if ($post_loop->have_posts() ) :
        while ($post_loop->have_posts()):
            $post_loop->the_post();?>

<!--    echo '<h1>'.the_ID().the_title().'</h1>';-->
            <h1>
                <?php echo the_title() ?> (id is :<?php echo the_ID(); ?>) <hr>
            </h1>

            <code>POST EXCERPT : <?php the_content(); ?></code> <br>

            <?php the_post_thumbnail(); ?>

            <?php the_content(); ?>


    <?php
        wp_reset_postdata();

        endwhile;
    endif;

    return ob_get_clean();

}


//Initialize shortcode
function portfolio_shortcode_init() {
    add_shortcode('portfolio','ahmed_register_portfolio_shortcode');
}

add_action('init','portfolio_shortcode_init');



//-------------------------------------------------------------------------------------------------------
//function css_and_js_init() {
//    wp_enqueue_style('style-css',plugins_url('assets/css/style.css',__FILE__));
//
//    wp_enqueue_script('ahmed-portfolio-js',plugins_url('assets/js/ahmed-portfolio-js.js',__FILE__));
//}
//
//add_action('wp_enqueue_scripts','css_and_js_init');
//-------------------------------------------------------------------------------------------------------