<?php 

/*
    Plugin Name: Our Test plugin
    Description: A truly amazing plugin
    Version: 1.0
    Author: Brad
    Author URI: denmercs.com
*/

add_action( 'admin_menu', 'ourPluginSettingsLink' );

function ourPluginSettingsLink() {
    add_options_page( 'Word Count Settings', 'Word Count', 'manage_options', 'word-count-settings-page', $function:callable, $position:integer|null )
}
