<?php
/*
Plugin Name: Lebanese Areas Plugin
Plugin URI: https://github.com/wpbeirut/Lebanese-Areas
Description: The official Governant , District, Area (City, Town) of Lebanon.
Version: 1.0
Author: Wordpress Beirut Community - Fadi Nicolas Zahhar
Author URI: https://www.meetup.com/Beirut-WordPress-Meetup/
License: GPL2
License URI: https://www.gnu.org/licenses/gol-2.0.html
Text Domain: lebaneseareas
*/
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function posplugin_enqueue_lebareas($hook) {

    wp_enqueue_script( 
        'posplugin_lebanonareas',                         // Handle
        plugins_url( 'js/lebaneseareas.min.js', __FILE__ ),  // Path to file
        array( 'jquery')                             // Dependancies
    );
}
// enqueue for back end
add_action('admin_enqueue_scripts','posplugin_enqueue_lebareas');
// enqueue fro front end
add_action( 'wp_enqueue_scripts', 'posplugin_enqueue_lebareas' );