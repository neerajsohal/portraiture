<?php

add_action('admin_menu', 'register_menus');

function register_menus() {
    add_theme_page( 'Portrature options', 'Portrature Theme Options', 'manage_options', 'portraiture-theme-options', 'portraiture_theme_options');
    /*add_theme_page( 'Diagnostics', 'Run Diagnostics', 'manage_options', 'canvas-diagnostics', 'run_diagnostics');*/
}