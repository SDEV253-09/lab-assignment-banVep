<?php

// Show erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('bookmark_fns.php');

do_html_header("Reset password");

display_forgot_form();

do_html_footer();


?>