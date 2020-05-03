<?php

// Show erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("bookmark_fns.php");
do_html_header("Resetting password");

// create short variable name
$username = $_POST['username'];

try {
	$password = reset_password($username);
	notify_password($username, $password);
	echo 'Your new password has been emailed to you.<br';
} 
catch (Exeption $e) {
	echo 'Your password could not be reset - please try again later.';
}
do_html_url('login.php', 'Login');
do_html_footer();
	
	
?>