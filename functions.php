<?php
if (function_exists('register_sidebar')) {
    register_sidebar(array('name' => 'Main Sidebar'));
    register_sidebar(array('name' => 'Single Post Sidebar'));
}

include_once "includes/custom_posts.php";
include_once "includes/meta_boxes.php";
include_once "includes/diagnostics.php";
include_once "includes/theme_options.php";
include_once "includes/menus.php";