<?php

// Show erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('bookmark_fns.php');
session_start();
do_html_header('Change Password');
check_valid_user();

display_password_form();

display_user_menu();
do_html_footer();

?>