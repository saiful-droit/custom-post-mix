<?php
/*
  Plugin Name: Custom post mixItup
  Plugin URI:  https://wordpress.org/plugins/custom-post-mixItup
  Description: Custom post mixItup, if you use it. you can easily create a custom post, taxonomics and put your required title content and images
  Version:     1.1
  Author:      nsstheme
  Author URI:  https://saiful5721.wordpress.com/about/
  License:     GPL2
  License URI: https://www.gnu.org/licenses/gpl-2.0.html
  Text Domain: nsstheme-mix
 */

/**
    copyRight by Nsstheme
 */

/* protected */
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

define('CPM_VERSION', '1.1');
define('CPM_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CPM_PLUGIN_URL', plugin_dir_url(__FILE__));

/* required */
spl_autoload_register(function ($class_name) {
    include 'mentor/' . $class_name . '.php';
});

/* class declerations */
new nsscustom_post();
new nssaddstyle();
new show_all_result();


