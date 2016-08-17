<?php

/* protected */
if (!defined('ABSPATH')) {
    die("&quot; Can'\'t load this file directly&quot;");
}
/**
    copyRight by Nsstheme
 */

/* Load style */

class nssaddstyle {
    //construct
    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'nssmix_added'));       
    }
    //methods
    public function nssmix_added() {
        wp_register_style('plugin-style', CPM_PLUGIN_URL . 'assets/css/plugin-style.css', array(), CPM_VERSION);
        wp_enqueue_style('plugin-style');

        wp_enqueue_script('jquery');
        wp_register_script('jqueryui', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
        wp_enqueue_script('jqueryui');

        wp_register_script('custom.js', CPM_PLUGIN_URL . 'assets/js/nss_custom.js', array('jquery'), CPM_VERSION, true);
        wp_enqueue_script('custom.js');

        wp_register_script('jquery.mixitup', CPM_PLUGIN_URL . 'assets/js/jquery.mixitup.js', array('jquery'), CPM_VERSION, true);
        wp_enqueue_script('jquery.mixitup');
    }   

}//end class
