<?php
/*
Plugin Name: Advanced User Panel Plugin
Plugin URI: https://wordpress.org/plugins/wp-wep-plugin
Description: Advanced User Panel Plugin
Author: Mohsen Hooshangi
Version: 1.0.0
Licence: GPLv2 or Later
Author URI: http://mh-develop.local
*/
defined('ABSPATH') || exit;

class WepCore
{
    public function __construct()
    {
        $this->define_constants();
        $this->init();
    }
    
    private function define_constants()
    {
        define('WEP_PLUGIN_DIR', plugin_dir_path(__FILE__));
        define('WEP_PLUGIN_URL', plugin_dir_url(__FILE__));
        define('WEP_PLUGIN_VIEWS', WEP_PLUGIN_DIR . 'view/');
        define('WEP_PLUGIN_ASSETS_STYLE', WEP_PLUGIN_URL . 'assets/css/');
        define('WEP_PLUGIN_ASSETS_JS', WEP_PLUGIN_URL . 'assets/js/');
        define('WEP_PLUGIN_ASSETS_IMG', WEP_PLUGIN_URL . 'assets/img/');
        
    }
    
    private function init()
    {
        include_once(ABSPATH . 'wp-includes/pluggable.php');
        include_once WEP_PLUGIN_DIR . 'class/AutoLoad.php';
        include_once WEP_PLUGIN_DIR . 'panel/router.php';
        add_action('wp_enqueue_scripts', [$this, 'wp_wep_register_assets']);
        
    }
    
    public function wp_wep_register_assets()
    {
        //CSS
        wp_register_style('bootstrap-5', WEP_PLUGIN_URL . 'assets/css/bootstrap4.css', '', '5,0,2');
        wp_register_style('wep-style', WEP_PLUGIN_URL . 'assets/css/front/style.css', '', '1.0.0');
        wp_enqueue_style('wep-style');
        wp_enqueue_style('bootstrap-5');
        //JS
        wp_register_script('wep-main-js', WEP_PLUGIN_URL . 'assets/js/front/main.js', ['jquery'], '1.0.0', 'true');
        wp_enqueue_script('wep-main-js');
    }
    
    public function is_user_logged_in()
    {
        if(!is_user_logged_in()){
            wp_redirect(site_url());
        }
    }
}

$core = new WepCore();
$core->is_user_logged_in();
