<?php 
/**
 * Divi-child Theme functions and definitions
 * 
 * @link   https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package Divi-child
 *
 */

 add_action( 'wp_enqueue_scripts', 'Divi_parent_theme_enqueue_styles');

 /**
  * Enqueue scripts and styles.
  */

  function Divi_parent_theme_enqueue_styles() {
    wp_enqueue_style('Divi-style', get_template_directory_uri() . '/style.css', array(), '5.0');
    wp_enqueue_style('Divi-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'Divi-style' ), '10.0');

  }