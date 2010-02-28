<?php
require_once 'admin/pt_admin.php';

if	 ( function_exists('register_sidebar') ) {
    register_sidebar(array('name' => 'Main Sidebar') );
    register_sidebar(array('name' => 'Single Post Sidebar') );
}


?>