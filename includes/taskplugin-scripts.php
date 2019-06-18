<?php

//nambah fungsi 
function taskplugin_add_scripts(){

	//add css 
	// fungsi ini menggunakan plugin url agar sistem dapat mencari letak css dari plugin
	wp_enqueue_style('taskplugin-main-style', plugins_url(). '/taskplugin/css/style.css');

	//add js
	wp_enqueue_script('taskplugin-main-script', plugins_url(). '/taskplugin/js/main.js');
}

//run
add_action('wp_enqueue_scripts', 'taskplugin_add_scripts');