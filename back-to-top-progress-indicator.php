<?php
/*
Plugin Name: Back to Top with Progress Indicator
Description: Add "Back to Top" button with a progress indicator bar.
Version: 1.0
Author: Md Asaduzzaman
Author URI: https://github.com/asadbd07/
*/

function enqueue_back_to_top_scripts() {
    wp_enqueue_style('back-to-top-styles', plugin_dir_url(__FILE__) . 'styles.css');
    wp_enqueue_script('back-to-top-script', plugin_dir_url(__FILE__) . 'script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_back_to_top_scripts');

function back_to_top_progress_button() {
    echo '
    <a id="scroll-top" class="scroll-top" href="#top" role="button">
        <i>
            <svg fill="#ffffff" width="25px" height="25px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M 16 6.59375 L 15.28125 7.28125 L 2.78125 19.78125 L 4.21875 21.21875 L 16 9.4375 L 27.78125 21.21875 L 29.21875 19.78125 L 16.71875 7.28125 Z"/></svg>
        </i>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70" class="svg-progress-indicator">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35" r="34" style="stroke-dasharray: 0, 400;"></circle>
        </svg> 
    </a>';
}
add_action('wp_footer', 'back_to_top_progress_button');
