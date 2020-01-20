<?php

// Load CSS Stylesheets

function load_css()

{
 wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
 wp_enqueue_style('bootstrap');

 wp_register_style('nicode_css', get_template_directory_uri() . '/css/nicode.css', array(), false, 'all');
 wp_enqueue_style('nicode_css');
}

add_action('wp_enqueue_scripts', 'load_css');


// Load Javascript

function load_js()
{

 wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
 wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');



// Navigation Menu

add_theme_support('menus');

// Menus

register_nav_menus(

 array(
  'top-menu' => 'Top Menu Location',
  'mobile-menu' => 'Mobile Menu Location',
 )
);