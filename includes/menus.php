<?php

add_action('admin_menu', 'register_menus');

function register_menus() {
    add_theme_page('Portrature options', 'Portrature Options', 'manage_options', 'portraiture-options', 'portraiture_theme_options');
    add_theme_page('Diagnostics', 'Run Diagnostics', 'manage_options', 'portraiture-diagnostics', 'run_diagnostics');
//    add_theme_page('Help', 'Portraiture Help', 'manage_options', 'portraiture-help', 'portraiture_help');
}

if (function_exists('register_nav_menus')) {
    register_nav_menus(
	    array(
	        'top_menu' => 'Primary Top Menu',
	    )
    );
}
