<?php
/**
* Plugin Name: Login logo URL to home
* Plugin URI: christian.herber.com/chrisplugin
* Description: Redirect the logo link in page login to your home page
* Version: 1.0.0
* Author: Christian Herber dos Santos
* Author URI: linkedin.com/in/christianherbersantos/
* License: GPL2
* Text Domain: login-logo-url-to-home
* WC tested up to: 5.8
**/

defined('ABSPATH') || exit;

function change_url_logo($link){
  return home_url();
}

add_filter('login_headerurl', 'change_url_logo');
