<?php

add_action('admin_menu', 'register_menus');

function register_menus() {
    add_menu_page('Portraiture Theme', 'Portraiture', 'manage_options', 'portraiture-options', null, '', '3');
    add_submenu_page('portraiture-options', 'Portraiture Options', 'Portraiture Options', 'manage_options', 'portraiture-options', 'portraiture_theme_options');
    add_submenu_page('portraiture-options', 'Diagnostics', 'Run Diagnostics', 'manage_options', 'portraiture-diagnostics', 'portraiture_diagnostics');
    add_submenu_page('portraiture-options', 'Portraiture Updates', 'Updates', 'manage_options', 'portraiture-updates', 'portraiture_updates');
}

if (function_exists('register_nav_menus')) {
    register_nav_menus(
	    array(
	        'top_menu' => 'Primary Top Menu',
	    )
    );
}
