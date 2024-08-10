<?php
/*
Plugin Name: Custom Wordpress Bootstrap Integration
Description: Enqueues Bootstrap CSS and JS.
Version: 1.0
Author: Kamau Fredrick
*/

function enqueue_bootstrap_cdn() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css');
    
    // Popper.js for Bootstrap
    wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js', array(), null, true);

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js', array('jquery', 'popper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_cdn');
?>
