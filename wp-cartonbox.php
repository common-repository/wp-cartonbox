<?php
/*
Plugin Name: CartonBox - pop-up modal windows
Description: Plugin for output images and other content in pop-up adaptive boxes.
Version: 1.0
Author: Ruslan Heorhiiev
Text Domain: wpcb
Domain Path: /assets/languages/

Copyright © 2018 Ruslan Heorhiiev
*/

if ( ! ABSPATH ) exit;

// константы & constants
define( 'WPCB_URL', plugin_dir_url( __FILE__ ) );

/**
 * Функция подключения JS
 * Function enqueu script
 * @version 1.0 
**/
function wpcb_do_enqueue_scripts() {
    
    // подключение CSS & enqueu CSS   
    wp_enqueue_style( 'cartonbox', WPCB_URL . 'assets/css/cartonbox.min.css', array(), '1.5.4' );      
    
    // подключение js & enqueu script
    wp_enqueue_script( 'cartonbox', WPCB_URL . 'assets/js/cartonbox.js', array('jquery'), '1.5.4', true );  
       
}
add_action( 'wp_enqueue_scripts', 'wpcb_do_enqueue_scripts' );