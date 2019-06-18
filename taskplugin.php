<?php
/*
Plugin Name: TaskPlugin
Plugin URI: https://github.com/mrhmt80/
Description: Plugin Pertama
Version: 0.0.0
Author: mrhmt

*/

//echo 31337;

//make private
if(!defined('ABSPATH')){
	exit;
}

//echo 666;

// panggil letak script

// otomatis menggunakan plugin dir path
require_once(plugin_dir_path(__FILE__).'/includes/taskplugin-scripts.php');


